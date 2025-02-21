# Stubz

**Stubz** is a command-line utility that generates **PHP stub files** from your existing codebase. Stubs can be used for static analysis, code hinting, or any scenario where you need a lightweight representation of classes, traits, interfaces, functions, and constants—without including the original implementation logic.

Stubz relies on [**Roave/BetterReflection**](https://github.com/Roave/BetterReflection) to parse your PHP code (and optionally PHP’s built-in classes) and generate these stubs. It preserves modern PHP features such as **final** methods, **readonly** properties, **enums**, and **attributes**.

---

## Features

- **Generates stubs** for classes, interfaces, traits, enums, functions, and constants.
- **Handles complex and nested code.**
- Handles **modern PHP features**:
    - Final & abstract classes and methods
    - Readonly properties (PHP 8.1+)
    - Enums (PHP 8.1+), including `case`s
    - Attributes (PHP 8+), with reflection on arguments
    - Intersection & union types, typed properties, constructor promotion, etc.
- **Exclude** directories or files using `--exclude <dir>` multiple times.
- **Finder mode** with `--finder <file.php>` to define custom logic (e.g., Symfony Finder queries).
- **Minimal file-based caching** for faster repeated runs:
    - Set `NO_STUB_CACHE=1` to disable caching entirely
    - Set `STUB_CACHE_DIR=/some/path` to customize the cache location
- **Colored console output** (if your terminal supports it).
- **Snapshot-friendly** for testing: each stub file can be compared to an expected baseline.

---

## Requirements

- **PHP 8.0** or later (recommended PHP 8.1+ for best feature coverage).
- Composer dependencies (including `roave/better-reflection`).

---

## Installation

1. Require Stubz via Composer (assuming your `composer.json` references this project or a local path):

   ```bash
   composer require your-vendor/stubz --dev
   ```

2. Ensure Stubz’s `stubz.php` script is executable or call it via `vendor/bin` if provided.

---

## Usage

### 1) Basic Directory Mode

Generate stubs from a source directory (`<sourceDir>`) into an output directory (`<outputDir>`):

```bash
php stubz.php [--exclude <dir>]... <sourceDir> <outputDir>
```

- **Example**:

  ```bash
  php stubz.php src /tmp/stubs
  ```

- **Excluding** directories or files by name:

  ```bash
  php stubz.php \
    --exclude vendor \
    --exclude tests \
    src \
    /tmp/stubs
  ```

  You can repeat `--exclude` any number of times. Any directory whose basename matches these strings will be skipped.

### 2) Finder Mode

Instead of scanning a directory directly, you can **provide a custom Finder** script:

```bash
php stubz.php --finder <finder-file.php> <outputDir>
```

- `<finder-file.php>` must **return** a [`Symfony\Component\Finder\Finder`](https://symfony.com/doc/current/components/finder.html) instance.
- **Cannot** combine `--finder` with `--exclude`. If both are provided, Stubz will exit with an error.

**Example** `myFinder.php`:

```php
use Symfony\Component\Finder\Finder;

$finder = Finder::create()
    ->files()
    ->in(__DIR__ . '/blocks')
    ->name('*.php')
    ->exclude('experimental');

return $finder;
```

Then run:

```bash
php stubz.php --finder myFinder.php /tmp/stubs
```

Stubz will parse exactly what the Finder instance returns—no excludes are allowed in this mode.

---

## Caching

Stubz caches the stub content per file to speed up repeated runs. Caching is controlled by:

- `NO_STUB_CACHE=1`: Disable cache reads and writes entirely.
- `STUB_CACHE_DIR=/path/to/cache`: Set a custom cache directory. Defaults to `./.reflection-cache`.

When caching is enabled, Stubz will:

1. Calculate a hash per file (including a parser version).
2. If a `.stubcache` file exists for that hash, it uses that content (cache hit).
3. Otherwise, it parses the file fully (cache miss), generates a stub, and saves it to cache.
4. After finishing all files, it cleans up stale `.stubcache` files no longer needed.

---

## Example Commands

1. **Simple**:

   ```bash
   php stubz.php src /tmp/stubs
   ```

2. **Exclude**:

   ```bash
   NO_STUB_CACHE=1 php stubz.php --exclude vendor --exclude assets src /tmp/stubs
   ```

3. **Finder Mode**:

   ```bash
   php stubz.php --finder customFinder.php /tmp/stubs
   ```

---

## Testing / Development

This project uses **PHPUnit** and **snapshot testing** to verify the correctness of generated stubs. The test suite is in `tests/`, with scenarios in `tests/scenarios/`.

- **Run all tests**:
  ```bash
  composer test
  ```
  or
  ```bash
  ./vendor/bin/phpunit
  ```

Tests create stubs in temporary folders and compare them to snapshots stored in `tests/__snapshots__`.  
If you add or change a scenario, you may need to **update snapshots**:

```bash
./vendor/bin/phpunit --update-snapshots
```

---

## Limitations / Notes

- Reflection-based stubs may differ slightly from the original source code:
    - **Anonymous classes** named `class@anonymous ...`
    - **Enum** classes may list internal `cases()` or `from()` methods automatically
    - Attributes with bitwise flags might appear as integers (e.g. `#[Attribute(5)]`)
    - **`declare(strict_types=1)`** is not preserved by default
- By default, Stubz tries to reflect **built-in PHP classes** so references to `Attribute`, `UnitEnum`, etc. won’t trigger an error. If you don’t need them, you can modify the code to skip `PhpInternalSourceLocator`.
- The generated stubs are typically **sufficient for static analysis** (e.g., for [PHPStan](https://github.com/phpstan/phpstan) or [Psalm](https://psalm.dev/)). They’re not guaranteed to be byte-for-byte identical to the original code.

---

## License

Stubz is open-sourced software licensed under the [MIT license](LICENSE).