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

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other :value.',
    'active_url' => 'الرابط :attribute غير صحيح.',
    'after' => 'يجب أن يكون تاريخ :attribute بعد :date.',
    'after_or_equal' => 'يجب أن يكون تاريخ :attribute بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على حروف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على حروف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي :attribute على حروف ASCII فقط.',
    'before' => 'يجب أن يكون تاريخ :attribute قبل :date.',
    'before_or_equal' => 'يجب أن يكون تاريخ :attribute قبل أو يساوي :date.',
    'between' => [
        'array' => 'يجب أن يحتوي :attribute بين :min و :max عنصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'string' => 'يجب أن يحتوي :attribute بين :min و :max حرف.',
    ],
    'boolean' => 'يجب أن يكون :attribute إما true أو false.',
    'confirmed' => 'تأكيد :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'التاريخ :attribute غير صحيح.',
    'date_equals' => 'يجب أن يكون التاريخ :attribute يساوي :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'decimal' => 'يجب أن يكون :attribute عدداً عشرياً ب :digits رقم.',
    'declined' => 'الحقل :attribute مرفوض.',
    'declined_if' => 'الحقل :attribute مرفوض إذا كان :other هو :value.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مختلفان.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقم.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقم.',
    'dimensions' => 'الصورة :attribute لها أبعاد غير صحيحة.',
    'distinct' => 'الحقل :attribute له قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'doesnt_start_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'email' => 'يجب كتابة البريد الإلكتروني :attribute بشكل صحيح.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'enum' => 'الحقل :attribute ليس قيمة صحيحة.',
    'exists' => 'الحقل :attribute غير موجود.',
    'file' => 'الحقل :attribute يجب أن يكون ملف.',
    'filled' => 'الحقل :attribute إجباري.',
    'gt' => [
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
        'string' => 'يجب أن يحتوي :attribute على أكثر من :value حرف.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يحتوي :attribute على :value حرف أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'الحقل :attribute غير صحيح.',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عدد صحيح.',
    'ip' => 'يجب كتابة عنوان IP :attribute بشكل صحيح.',
    'ipv4' => 'يجب كتابة عنوان IPv4 :attribute بشكل صحيح.',
    'ipv6' => 'يجب كتابة عنوان IPv6 :attribute بشكل صحيح.',
    'json' => 'يجب كتابة نص JSON :attribute بشكل صحيح.',
    'lowercase' => 'يجب أن يكون الحقل :attribute بحروف صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أصغر من :value.',
        'string' => 'يجب أن يحتوي :attribute على أقل من :value حرف.',
    ],
    'lte' => [
        'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أقل.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أصغر من أو يساوي :value.',
        'string' => 'يجب أن يحتوي :attribute على :value حرف أو أقل.',
    ],
    'mac_address' => 'يجب كتابة عنوان MAC :attribute بشكل صحيح.',
    'max' => [
        'array' => 'يجب أن يحتوي :attribute على :max عنصر أو أقل.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أصغر من :max.',
        'string' => 'يجب أن يحتوي :attribute على :max حرف أو أقل.',
    ],
    'max_digits' => 'يجب أن يحتوي :attribute على :max رقم.',
    'mimes' => 'يجب أن يكون :attribute ملف من نوع : :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملف من نوع : :values.',
    'min' => [
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أكبر من :min.',
        'string' => 'يجب أن يحتوي :attribute على الأقل على :min حرف.',
    ],
    'min_digits' => 'يجب أن يحتوي :attribute على الأقل على :min رقم.',
    'multiple_of' => 'يجب أن يكون :attribute مضاعفاً من :value.',
    'not_in' => 'الحقل :attribute لاغٍ.',
    'not_regex' => 'صيغة الحقل :attribute غير صحيحة.',
    'numeric' => 'يجب على الحقل :attribute أن يكون رقماً.',
    'password' => [
        'letters' => 'يجب أن تحتوي كلمة المرور على حروف.',
        'mixed' => 'يجب أن تحتوي كلمة المرور على حروف وأرقام.',
        'case_diff' => 'يجب أن تحتوي كلمة المرور على حروف كبيرة وصغيرة.',
        'numbers' => 'يجب أن تحتوي كلمة المرور على أرقام.',
        'symbols' => 'يجب أن تحتوي كلمة المرور على رموز.',
        'uncompromised' => 'يجب أن تكون كلمة المرور آمنة.',
    ],
    'present' => 'يجب تقديم الحقل :attribute.',
    'prohibited' => 'الحقل :attribute محظور.',
    'prohibited_if' => 'الحقل :attribute محظور عندما يكون :other يساوي :value.',
    'prohibited_unless' => 'الحقل :attribute محظور ما لم يكن :other يساوي :values.',
    'prohibits' => 'الحقل :attribute يمنع :other من الحقول.',
    'regex' => 'صيغة الحقل :attribute غير صحيحة.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب أن يحتوي على مفاتيح محددة.',
    'required_if' => 'الحقل :attribute مطلوب إذا كان :other يساوي :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب إذا تم قبول :other.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other يساوي :values.',
    'required_with' => 'الحقل :attribute مطلوب إذا توفّر :values.',
    'required_with_all' => 'الحقل :attribute مطلوب إذا توفّر :values.',
    'required_without' => 'الحقل :attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق الحقلان :attribute و :other.',
    'size' => [
        'array' => 'يجب أن يحتوي :attribute على :size عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute مساوياً لـ :size.',
        'string' => 'يجب أن يحتوي :attribute على :size حرفًا/حروف.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute نصاً.',
    'timezone' => 'يجب أن يكون الحقل :attribute منطقة صالحة.',
    'unique' => 'قيمة الحقل :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في رفع :attribute.',
    'uppercase' => 'يجب أن يحتوي الحقل :attribute على حروف كبيرة.',
    'url' => 'صيغة الرابط :attribute غير صحيحة.',
    'ulid' => 'الحقل :attribute يجب أن يكون ULID صالحاً.',
    'uuid' => 'الحقل :attribute يجب أن يكون UUID صالحاً.',

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
