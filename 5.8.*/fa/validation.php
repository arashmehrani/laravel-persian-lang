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

    'accepted' => 'گزینه :attribute باید پذیرفته شود.',
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
        'string' => 'گزینه :attribute میتواند شامل :min تا :max حرف باشد.',
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
        'string' => 'گزینه :attribute باید بزرگتر یا مساوی :value کاراکتر باشد.',
        'array' => 'گزینه :attribute باید :value آیتم یا بیشتر داشته باشد.',
    ],
    'image' => 'گزینه :attribute تنها می تواند تصویر باشد.',
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
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    'attributes' => [],

];
