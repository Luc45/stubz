#!/usr/bin/env bash
#
# refresh_and_fix_stubs_with_phpcsfixer.sh
#
# 1) Remove ./stubz/woocommerce
# 2) Run `make -C ../../ update_snapshot_slow`
# 3) Copy stubs from ../../tests/__snapshots__/plugins/woocommerce to ./stubz/woocommerce
# 4) Install PHP-CS-Fixer in a temp directory (using existing global Composer)
# 5) Create a minimal .php-cs-fixer config that extends PSR-12 + braces, etc.
# 6) Run php-cs-fixer fix on both:
#    - ./php-stubs-generator/woocommerce
#    - ./stubz/woocommerce
# 7) Leaves the temp folder unless you uncomment the rm -rf

set -e  # Exit on error

# Optional parameter: coding standard name or set of rules. Defaults to PSR12
STANDARD="${1:-PSR12}"

########################################
# 1) Remove ./stubz/woocommerce
########################################
echo "Removing ./stubz/woocommerce ..."
rm -rf ./stubz/woocommerce

########################################
# 2) Run `make update_snapshot_slow` from two dirs up
########################################
echo "Running 'make update_snapshot_slow' from ../../ ..."
make -C ../../ update_snapshots_slow

########################################
# 3) Copy stubs from ../../tests/__snapshots__/plugins/woocommerce
########################################
echo "Copying updated stubs into ./stubz/woocommerce ..."
cp -R ../../tests/__snapshots__/plugins/woocommerce ./stubz/woocommerce

########################################
# 4) Install PHP-CS-Fixer in a temp dir
########################################
WORKDIR="$(mktemp -d)"
echo "Using temporary directory: $WORKDIR"
pushd "$WORKDIR" >/dev/null

# minimal composer.json to require php-cs-fixer
cat <<EOF > composer.json
{
  "require": {
    "friendsofphp/php-cs-fixer": "^3.0"
  }
}
EOF

echo "Installing php-cs-fixer in temp directory using global composer..."
composer install --no-dev --quiet

popd >/dev/null

########################################
# 5) Create a minimal .php-cs-fixer config
########################################
# We define some extra rules for braces + method arg spacing

cat <<EOCFG > "$WORKDIR/.php-cs-fixer.dist.php"
<?php

return (new PhpCsFixer\\Config())
    ->setRules([
        '@$STANDARD' => true,
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'next',
        ],
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
    ])
    ->setIndent('    ')
    ->setLineEnding("\\n")
    ->setFinder(
        PhpCsFixer\\Finder::create()
            ->in([
                // We'll pass actual dirs via CLI
            ])
    );
EOCFG

########################################
# 6) Run php-cs-fixer fix on both directories
########################################
DIR_A="./php-stubs-generator/woocommerce"
DIR_B="./stubz/woocommerce"

echo "Applying php-cs-fixer with '$STANDARD' + bracket rules to:"
echo "  1) $DIR_A"
echo "  2) $DIR_B"

"$WORKDIR/vendor/bin/php-cs-fixer" fix "$DIR_A" \
    --config="$WORKDIR/.php-cs-fixer.dist.php" --quiet

"$WORKDIR/vendor/bin/php-cs-fixer" fix "$DIR_B" \
    --config="$WORKDIR/.php-cs-fixer.dist.php" --quiet

########################################
# 7) Done
########################################
echo "All done! Code in '$DIR_A' and '$DIR_B' is now standardized with $STANDARD + bracket rules."
echo "Temp files remain in $WORKDIR (uncomment rm -rf line if you want to remove them)."

# Uncomment the following if you want the temp directory removed automatically:
# rm -rf "$WORKDIR"