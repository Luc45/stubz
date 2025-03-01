# Stubz for WordPress Plugins

**Stubz** is a command-line utility designed to generate **PHP stub files** specifically tailored for WordPress plugins,
although it supports any PHP codebase. PHP stubs simplify static analysis by providing a lightweight representation of
your plugin's classes, traits, interfaces, functions, and constants, excluding implementation logic.

Stubz was initially developed to support the **Quality Insights Toolkit (QIT)** at **Automattic**, helping to enhance
the reliability and accuracy of static code analysis within WordPress plugin ecosystems.

WordPress operates as an **event-driven framework**, meaning many plugins define classes and functions within event
callbacks (hooks). A common pattern in WordPress plugins that trips static code analysis involves defining classes
inside action callbacks. For example:

```php
add_action('plugins_loaded', function() {
    class MyPluginMainClass {
        // class logic
    }
});
```

In static analysis tools like PHPStan, there's no guarantee the `plugins_loaded` action will ever be invoked. As a
result, the tool fails to recognize dynamically defined classes, producing false positives or "class not found" errors.

Stubz resolves this issue by **"flattening" the code definitions**. It moves class, function, and constant definitions
out of callbacks, making them readily discoverable for static analysis.

## Recommended Usage with PHPStan

PHPStan differentiates between two important concepts:

- **Scan:** PHPStan scans files to discover classes, functions, constants, and other code structures.
- **Analyse:** PHPStan analyses the scanned files for potential errors, type mismatches, incorrect method calls, and
  other code quality issues.

To leverage Stubz effectively, configure PHPStan to:

- **Analyse** your plugin's actual source code for code quality:

```bash
./vendor/bin/phpstan analyse ./src
```

- **Scan** the generated stubs to ensure dynamically defined entities are recognized:

```neon
parameters:
    scanDirectories:
        - ./src-stubs
```

This configuration ensures accurate static analysis while eliminating common WordPress-specific false positives.

## Features

- **Generates stubs** for classes, interfaces, traits, enums, functions, and constants.
- Supports complex, nested WordPress-specific patterns.
- Handles modern PHP features including:
    - Final & abstract classes and methods
    - Readonly properties (PHP 8.1+)
    - Enums (PHP 8.1+), including `case`s
    - Attributes (PHP 8+), with reflection on arguments
    - Intersection & union types, typed properties, constructor promotion
- **Exclude** specific directories/files using `--exclude <dir>`.
- **Custom Finder mode** (`--finder <file.php>`) for advanced queries.

## Requirements

- **PHP 8.2** or later
- Composer dependencies (`roave/better-reflection`, `symfony/finder`)

## Quick Start Guide

1. Install Stubz using Composer:

   ```bash
   composer require lucasbustamante/stubz --dev
   ```

2. Generate stubs for your plugin:

   ```bash
   ./vendor/bin/stubz ./src ./src-stubs
   ```

### Excluding Directories

Exclude directories like vendor, tests, or build artifacts:

```bash
./vendor/bin/stubz --exclude vendor --exclude tests ./src ./src-stubs
```

### Using a Custom Finder

For more complex inclusion/exclusion logic, create a `finder.php`:

```php
use Symfony\Component\Finder\Finder;

$finder = Finder::create()
    ->files()
    ->in(__DIR__ . '/src')
    ->name('*.php')
    ->exclude('tests');

return $finder;
```

Then run Stubz:

```bash
./vendor/bin/stubz --finder finder.php ./src-stubs
```

## License

Stubz is open-source software licensed under the [MIT license](LICENSE).