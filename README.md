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

- **PHP 8.2** or later
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

---

## License

Stubz is open-source software licensed under the [MIT license](LICENSE).
``