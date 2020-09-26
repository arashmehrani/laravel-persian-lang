<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute باید پذیرفته شود',
    'active_url' => 'آدرس :attribute معتبر نمی باشد.',
    'after' => 'گزینه :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'گزینه :attribute باید تاریخی بعد یا همزمان با :date باشد.',
    'alpha' => 'گزینه :attribute تنها میتواند شامل حروف باشد.',
    'alpha_dash' => 'گزینه :attribute تنها می تواند شامل حروف ، اعداد ، - و _ باشد.',
    'alpha_num' => 'گزینه :attribute تنها میتواند شامل حروف و اعداد باشد.',
    'array' => 'گزینه :attribute تنها می تواند آرایه باشد.',
    'before' => 'گزینه :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'گزینه :attribute باید تاریخی قبل یا همزمان با :date باشد.',
    'between' => [
        'numeric' => 'عدد :attribute باید بین :min تا :max باشد',
        'file' => 'حجم :attribute باید بین :min تا :max کیلوبایت باشد.',
        'string' => 'گزینه :attribute باید بین :min تا :max کاراکتر باشد.',
        'array' => 'آرایه :attribute باید بین :min تا :max باشد.',
    ],
    'boolean' => 'گزینه :attribute تنها میتواند صحیح با غلط باشد.',
    'confirmed' => 'تایید مجدد :attribute صحیح نمی باشد.',
    'date' => 'گزینه :attribute مورد قبول نمی باشد.',
    'date_equals' => 'گزینه :attribute باید تاریخی همزمان با :date باشد.',
    'date_format' => 'گزینه :attribute با فرمت :format سازگار نیست.',
    'different' => 'گزینه :attribute و :other باید متفاوت باشند.',
    'digits' => 'گزینه :attribute باید :digits رقم باشد.',
    'digits_between' => 'گزینه :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد گزینه :attribute مورد پذیرش نمی باشد.',
    'distinct' => 'گزینه :attribute دارای محتوای تکراری می باشد.',
    'email' => 'گزینه :attribute باید شامل آدرس ایمیل معتبر باشد!',
    'ends_with' => 'گزینه :attribute باید با یکی از موارد زیر به پایان برسد: :values',
    'exists' => 'گزینه :attribute انتخاب شده معتبر نمی باشد!',
    'file' => 'گزینه :attribute باید یک فایل باشد.',
    'filled' => 'گزینه :attribute نمی تواند خالی باشد!',
    'gt' => [
        'numeric' => 'گزینه :attribute باید بیشتر از :value باشد.',
        'file' => 'گزینه :attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => 'گزینه :attribute باید بزرگتر از :value کاراکتر باشد.',
        'array' => 'گزینه :attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte' => [
        'numeric' => 'گزینه :attribute باید بیشتر یا مساوی :value باشد.',
        'file' => 'گزینه :attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
        'string' => 'گزینه :attribute باید بزرگتر یا مساوی :value حروف باشد.',
        'array' => 'گزینه :attribute باید :value آیتم یا بیشتر داشته باشد.',
    ],
    'image' => 'گزینه :attribute تنها می تواند از نوع عکس باشد.',
    'in' => 'گزینه انتخابی :attribute صحیح نمی باشد.',
    'in_array' => 'گزینه :attribute در :other وجود ندارد.',
    'integer' => 'گزینه :attribute باید از نوع عدد باشد.',
    'ip' => 'گزینه :attribute باید یک آدرس ip معتبر باشد.',
    'ipv4' => 'گزینه :attribute باید از نوع ipv4 معتبر باشد.',
    'ipv6' => 'گزینه :attribute باید از نوع ipv6 معتبر باشد.',
    'json' => 'گزینه :attribute باید از نوع رشته JSON معتبر باشد.',
    'lt' => [
        'numeric' => 'گزینه :attribute باید کمتر از :value باشد.',
        'file' => 'گزینه :attribute باید کمتر از :value کیلوبایت باشد.',
        'string' => 'گزینه :attribute باید کمتر از :value حرف باشد.',
        'array' => 'گزینه :attribute باید کمتر از :value آیتم باشد.',
    ],
    'lte' => [
        'numeric' => 'گزینه :attribute باید کمتر یا مساوی :value باشد.',
        'file' => 'گزینه :attribute باید کمتر یا مساوی :value کیلوبایت باشد.',
        'string' => 'گزینه :attribute باید کمتر یا مساوی :value حروف باشد.',
        'array' => 'گزینه :attribute نباید بیشتر از :value آیتم داشته باشد.',
    ],
    'max' => [
        'numeric' => 'گزینه :attribute نباید بزرگتر از :max باشد.',
        'file' => 'گزینه :attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => 'گزینه :attribute نباید بزرگتر از :max حروف باشد.',
        'array' => 'گزینه :attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes' => 'گزینه باید نوع فایلی :values باشد.',
    'mimetypes' => 'گزینه باید نوع فایلی :values باشد.',
    'min' => [
        'numeric' => 'گزینه :attribute باید حداقل :min باشد.',
        'file' => 'گزینه :attribute باید حداقل :min کیلوبایت باشد.',
        'string' => 'گزینه :attribute باید دارای حداقل :min حروف باشد.',
        'array' => 'گزینه :attribute باید دارای حداقل :min آیتم باشد.',
    ],
    'not_in' => 'گزینه انتخابی :attribute صحیح نمی باشد.',
    'not_regex' => 'فرمت گزینه :attribute صحیح نمی باشد.',
    'numeric' => 'گزینه :attribute باید عددی باشد.',
    'present' => 'گزینه :attribute باید پرزنت باشد.',
    'regex' => 'فرمت گزینه :attribute صحیح نمی باشد.',
    'required' => 'تکمیل گزینه :attribute الزامی است.',
    'required_if' => 'تکمیل گزینه :attribute در صورتی که :other مقدار :value است الزامی است',
    'required_unless' => 'تکمیل گزینه :attribute الزامی است مگر اینکه :other در :values است.',
    'required_with' => 'زمانی تکمیل گزینه :attribute الزامی است که :values پرزنت باشد.',
    'required_with_all' => 'زمانی تکمیل گزینه :attribute الزامی است که :values پرزنت باشد.',
    'required_without' => 'زمانی تکمیل گزینه :attribute الزامی است که :values پرزنت نباشد.',
    'required_without_all' => 'زمانی تکمیل گزینه :attribute الزامی است که هیچکدام از :values پرزنت نباشد.',
    'same' => 'گزینه :attribute و :other باید یکی باشند.',
    'size' => [
        'numeric' => 'مقدار :attribute باید :size باشد.',
        'file' => 'مقدار :attribute باید :size کیلوبایت باشد.',
        'string' => 'مقدار :attribute باید :size کاراکتر باشد.',
        'array' => 'مقدار :attribute باید حاوی :size آیتم باشد.',
    ],
    'starts_with' => 'گزینه :attribute باید با یکی از این موارد شروع شود : :values',
    'string' => 'گزینه :attribute تنها می تواند حروف باشد.',
    'timezone' => 'گزینه :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => 'این :attribute از قبل وجود دارد.',
    'uploaded' => 'گزینه :attribute آپلود نشد.',
    'url' => 'فرمت گزینه :attribute صحیح نمی باشد.',
    'uuid' => 'گزینه :attribute باید یک UUID صحیح باشد.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
'attributes' => [
        'name' => 'نام',
        'username' => 'نام کاربری',
        'email' => 'ایمیل',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تاییدیه رمز عبور',
        'city' => 'شهر',
        'state' => 'استان',
        'country' => 'کشور',
        'address' => 'آدرس',
        'phone' => 'تلفن',
        'mobile' => 'تلفن همراه',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
        'text' => 'متن',
        'content' => 'محتوا',
        'description' => 'توضیحات',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'available' => 'موجود',
        'type' => 'نوع',
        'img' => 'تصویر',
        'image' => 'تصویر',
        'size' => 'اندازه',
        'color' => 'رنگ',
        'captcha' => 'کد امنیتی',
        'price' => 'قیمت',
        'pic' => 'تصویر',
        'link' => 'لینک',
    ],
];
