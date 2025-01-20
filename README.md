# Laravel Persian Language

A **Persian language package** for **Laravel 11+**, providing translations for `authentication`, `validation`, `pagination`, and `password reset messages`. Simplify localization in your Laravel projects with this ready-to-use package.

---

## The Main Features

- **Fully compatible with Laravel 11.**
- Covers all standard Laravel translation files:
  - Authentication (`auth.php`)
  - Pagination (`pagination.php`)
  - Passwords (`passwords.php`)
  - Validation (`validation.php`)
  - General messages (`fa.json`)
- Simple installation and setup process.

---

## Installation

Install the package using Composer:

```bash
$ composer require arashmehrani/laravel-persian-lang
```

---

## Usage

### Step 1: Publish the Language Files

Run the following Artisan command to publish the Persian language files:

```bash
php artisan vendor:publish --tag=laravel-persian-lang
```

The files will be copied to your `lang` directory as follows:

```text
laravel/
└── lang/
    ├── fa.json
    └── fa/
        ├── auth.php
        ├── pagination.php
        ├── passwords.php
        └── validation.php
```

---

### Step 2: Set Persian as the Default Locale

To make Persian the default language of your application, update the `locale` setting in the `config/app.php` file:

```php
'locale' => 'fa',
```

---

### Updating Translations

If new updates or fixes are made to the translations, you can republish the files by running:

```bash
php artisan vendor:publish --tag=laravel-persian-lang --force
```

This will overwrite the existing Persian language files with the latest versions from the package.

---

## Contribution Guidelines

Contributions are welcome! Here's how to contribute:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`.
3. Commit your changes: `git commit -m "Add feature or fix"`.
4. Push to your branch: `git push origin feature/your-feature-name`.
5. Submit a pull request.

---

## License

This package is open-source software licensed under the [MIT license](LICENSE).

---

## Need Help?

If you encounter any issues, feel free to [open an issue](https://github.com/arashmehrani/laravel-persian-lang) on GitHub.
