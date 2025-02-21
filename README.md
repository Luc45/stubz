# Stubz

**Stubz** is a command-line utility that generates **PHP stub files** from your existing codebase.  
Stubs can be used for static analysis, code hinting, or any scenario where you need a lightweight  
representation of classes, traits, interfaces, functions, and constants—without including the  
original implementation logic.

Stubz relies on [**Roave/BetterReflection**](https://github.com/Roave/BetterReflection) to parse your  
PHP code (and optionally PHP’s built-in classes) and generate these stubs. It preserves modern  
PHP features such as **final** methods, **readonly** properties, **enums**, and **attributes**.

---

## Features

- **Generates stubs** for classes, interfaces, traits, enums, functions, and constants.  
- Supports **complex, nested** code structures.  
- Handles **modern PHP features**:
  - Final & abstract classes and methods
  - Readonly properties (PHP 8.1+)
  - Enums (PHP 8.1+), including `case`s
  - Attributes (PHP 8+), with reflection on arguments
  - Intersection & union types, typed properties, constructor promotion, etc.
- **Exclude** directories or files using `--exclude <dir>` multiple times.
- **Finder mode** with `--finder <file.php>` to define custom logic (e.g., Symfony Finder queries).
- **Minimal file-based caching** for faster repeated runs:
  - `NO_STUB_CACHE=1` to fully disable caching
  - `STUB_CACHE_DIR=/some/path` to set a custom cache location
- **Colored console output** (if your terminal supports it).
- **Snapshot-friendly** for testing: stub files can be compared to an expected baseline.

---

## Requirements

- **PHP 8.1** or later
- Composer dependencies (`roave/better-reflection`, `symfony/finder`).

---

## Installation

1. Add Stubz to your project:

   ```bash
   composer require lucasbustamante/stubz --dev
   ```

2. After installation, **Composer** will place a symlink to `stubz.php` in your  
   `vendor/bin` directory as **`stubz`**. You can now run Stubz via:

   ```bash
   ./vendor/bin/stubz [options...]
   ```

   Or, if you prefer, call the script directly:

   ```bash
   php vendor/lucasbustamante/stubz/stubz.php [options...]
   ```

---

## How Stubs Are Generated

Unlike some tools that produce **one massive stub file**, Stubz creates **per-file** stubs
preserving your **original directory structure**. That means if you have:

```
src/
  MyClass.php
  Utils/Helper.php
```

Stubz will generate a parallel folder structure in your output directory:

```
/tmp/stubs/src/
  MyClass.php
  Utils/Helper.php
```

Each `.php` file has the **same name** but contains **stub** definitions—class signatures,  
functions, constants, docblocks, etc.—instead of full implementations. This layout
makes it easy to navigate or "point" static analysis tools to the same structure as
your original code, but with the bodies replaced by minimal stub code.

---

## Usage

### 1) Basic Directory Mode

Generate stubs from a source directory (`<sourceDir>`) into an output directory (`<outputDir>`):

```bash
./vendor/bin/stubz [--exclude <dir>]... <sourceDir> <outputDir>
```

- **Example**:

  ```bash
  ./vendor/bin/stubz src /tmp/stubs
  ```

- **Excluding** directories or files by name:

  ```bash
  ./vendor/bin/stubz \
    --exclude vendor \
    --exclude tests \
    src \
    /tmp/stubs
  ```

  You can repeat `--exclude` any number of times. Any directory whose basename matches these strings will be skipped.

### 2) Finder Mode

Instead of scanning a directory directly, you can **provide a custom Finder** script:

```bash
./vendor/bin/stubz --finder <finder-file.php> <outputDir>
```

- `<finder-file.php>` must **return** a [`Symfony\Component\Finder\Finder`](https://symfony.com/doc/current/components/finder.html) instance.
- You **cannot** combine `--finder` and `--exclude`. If both are provided, Stubz will exit with an error.

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
./vendor/bin/stubz --finder myFinder.php /tmp/stubs
```

Stubz will parse exactly what the Finder instance returns—no excludes are allowed in this mode.

---

## Performance & Caching

### Why Caching Matters

Parsing every PHP file with **BetterReflection** is **performance-intensive**:
- It builds an **AST (Abstract Syntax Tree)** for each file.
- It reflects classes, properties, methods, attributes, etc.
- Doing this for large codebases can be slow.

To mitigate this, Stubz includes a **file-based caching** system. Each file’s parsed state is  
stored in a `.stubcache` file, keyed by a **hash** of its contents. If a file hasn’t changed  
(and the parser version is the same), Stubz reuses its stub from cache—**no** re-parsing.

### How to Use Caching

- **Default location**: `./.reflection-cache/<slug>/`
- **Disable** caching: `NO_STUB_CACHE=1`
- **Custom location**: `STUB_CACHE_DIR=/path/to/cache`

An example run with caching:

```bash
STUB_CACHE_DIR=/tmp/stubz-cache \
./vendor/bin/stubz src /tmp/stubs
```

If the files in `src/` are unchanged, Stubz will skip fresh parsing and read `.stubcache` files  
from `/tmp/stubz-cache/<slug>/`.

### Example with GitHub Actions

A common pattern is to **cache** your `.stubcache` folder between CI runs:

```yaml
name: CI

on:
  push:
    branches: [ "main" ]

jobs:
  build-stubs:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2

      - name: Set up PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.1'

      - name: Cache stubcache
        uses: actions/cache@v2
        with:
          path: ./.reflection-cache
          key: ${{ runner.os }}-stubz-${{ hashFiles('**/*.php') }}

      - name: Install Dependencies
        run: composer install --no-interaction --prefer-dist

      - name: Generate Stubs
        run: ./vendor/bin/stubz src /tmp/stubs
```

In this example:

1. **`actions/cache@v2`** stores or retrieves your `.reflection-cache` folder.
2. The **`key`** includes a hash of all `.php` files in the repo, so the cache is invalidated when  
   code changes.
3. Next run, if nothing changed, Stubz will see valid `.stubcache` files and skip expensive parsing.

---

## Example Commands

1. **Simple**:

   ```bash
   ./vendor/bin/stubz src /tmp/stubs
   ```

2. **Exclude**:

   ```bash
   NO_STUB_CACHE=1 ./vendor/bin/stubz --exclude vendor --exclude assets src /tmp/stubs
   ```

3. **Finder Mode**:

   ```bash
   ./vendor/bin/stubz --finder customFinder.php /tmp/stubs
   ```

---

## Testing / Development

This project uses **PHPUnit** (in a separate `tests/composer.json`) and **snapshot testing** to  
verify the correctness of generated stubs. The test suite is in `tests/`, with many scenarios in  
`tests/scenarios/`.

You can run the test commands **inside** the `tests/` directory, where PHPUnit is installed.  
It creates stubs in temporary folders, then compares them to snapshots in `tests/__snapshots__`.  
Updating snapshots is as simple as:

```bash
./vendor/bin/phpunit --update-snapshots
```

---

## Limitations & Notes

- Reflection-based stubs **can differ** from the original code (e.g., anonymous classes named  
  `class@anonymous ...`, enum classes listing internal methods, or attribute flags becoming  
  numeric).
- `declare(strict_types=1)` is not included.
- By default, built-in PHP classes (like `Attribute` or `Iterator`) are recognized, so stubbing  
  them won’t cause reflection failures.
- Generated stubs are typically sufficient for static analysis (e.g., [PHPStan](https://github.com/phpstan/phpstan),  
  [Psalm](https://psalm.dev/)). They aren’t intended for byte-for-byte code representation.

---

## License

Stubz is open-source software licensed under the [MIT license](LICENSE).
``