# Persian language for Laravel framework versions 5.8 - 11
###### available versions:
- Laravel 5.8.*
- Laravel 6.*
- Laravel 7.*
- Laravel 8.*
- Laravel 9.*
- Laravel 10.*
- Laravel 11.*
  
## What's included

```text
laravel/
└── resources/
    └── lang/
        ├── fa.json
        └── fa/
            ├── auth.php
            ├── pagination.php
            ├── passwords.php
            └── validation.php
```

## how to use ?
1. into your laravel project go to the this address: `\resources\lang` and past our `fa.json` and `fa` directory in there.
3. then in your laravel project go to the this address: `\config` and open `app.php` then search for `'locale' => 'en'` and change it to `'locale' => 'fa'`
4. done.


<div dir="rtl">

## نحوه استفاده؟
1. ابتدا در پروژه لاراولی خود به این مسیر `\resources\lang` بروید و فایل `fa.json` و سپس نسبت به نگارش لاراول خود پوشه `fa` این پکیج را آنجا کپی/پیست کنید.
2. حالا در پروژه لاراول خود به مسیر `\config` بروید و فایل `app.php` را باز کنید. در آن فایل دنبال عبارت `'locale' => 'en'` بگردید و آن را به `'locale' => 'fa'` تغییر دهید.
3. حالا تمام پیغام ها و ایمیل های لاراول فارسی شده است!
<br>
-- نکته : برای لاراول 10,11 باید ابتدا فایل های زبان را با دستور آرتیزان پابلیش نمایید و پوشه زبان ها به صورت زیر است (فایل json برای ترجمه کل برنامه بسیار مناسب است) :
</div>

```text
laravel/
    └── lang/
      └── fa.json
      └── fa/
          ├── auth.php
          ├── pagination.php
          ├── passwords.php
          └── validation.php
```

```cli
php artisan lang:publish
```
