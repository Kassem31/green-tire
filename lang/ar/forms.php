<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Forms Language Lines (Arabic)
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for form elements throughout
    | the application including labels, placeholders, validation messages, etc.
    |
    */

    // Common Form Fields
    'id' => 'المعرف',
    'name' => 'الاسم',
    'name_arabic' => 'الاسم (العربي)',
    'name_english' => 'الاسم (الإنجليزي)',
    'email' => 'البريد الإلكتروني',
    'password' => 'كلمة المرور',
    'confirm_password' => 'تأكيد كلمة المرور',
    'phone' => 'الهاتف',
    'address' => 'العنوان',
    'city' => 'المدينة',
    'country' => 'البلد',
    'date' => 'التاريخ',
    'time' => 'الوقت',
    'description' => 'الوصف',
    'status' => 'الحالة',
    'type' => 'النوع',
    'category' => 'الفئة',
    'created_at' => 'تاريخ الإنشاء',
    'updated_at' => 'تاريخ التحديث',
    'created_by' => 'أنشئ بواسطة',
    'updated_by' => 'محدث بواسطة',
    'actions' => 'الإجراءات',    // Repair Transactions
    'inspection_barcode' => 'رمز التفتيش الشريطي',
    'tire_type' => 'نوع الإطار',
    'decision' => 'القرار',
    'repair_steps' => 'خطوات الإصلاح',
    'barcode' => 'الرمز الشريطي',
    'inspection_transaction_details' => 'تفاصيل معاملة التفتيش',
    'inspection_information' => 'معلومات التفتيش',
    'final_decision' => 'القرار النهائي',
    'repair' => 'إصلاح',
    'scrap' => 'خردة',
    'pending' => 'معلق',
    'select_repair_step' => 'اختر خطوة إصلاح',
    'selected_steps' => 'الخطوات المحددة',
    'repair_transaction_information' => 'معلومات معاملة الإصلاح',
    'created_date' => 'تاريخ الإنشاء',
    'updated_date' => 'تاريخ التحديث',
    'inspection_decision' => 'قرار التفتيش',    'building_date' => 'تاريخ التصنيع',
    'machine' => 'الآلة',
    'no_repair_steps_added' => 'لم يتم إضافة خطوات إصلاح',

    // Inspection Transactions
    'operator_name' => 'اسم المشغل',
    'operator_code' => 'كود المشغل',
    'observations' => 'الملاحظات',
    'select_observation' => 'اختر ملاحظة',
    'observation_already_added' => 'تمت إضافة هذه الملاحظة مسبقاً',
    'enter_barcode_and_validate' => 'أدخل الباركود واضغط على التحقق أو اضغط Enter',
    'validate' => 'تحقق',
    'inspection_details' => 'تفاصيل الفحص',
    'observation_details' => 'تفاصيل الملاحظات',
    'no_observations' => 'لا توجد ملاحظات',
    'inspection_date' => 'تاريخ الفحص',
    'observation_name' => 'اسم الملاحظة',

    // Messages for empty states
    'no_pending_transactions_found' => 'لم يتم العثور على معاملات معلقة.',

    // Placeholders
    'enter_name' => 'أدخل الاسم',
    'enter_email' => 'أدخل البريد الإلكتروني',
    'enter_password' => 'أدخل كلمة المرور',
    'select_option' => 'اختر خيار',
    'search_placeholder' => 'بحث...',    // User Management
    'is_active' => 'نشط',
    'user_account_is_active' => 'حساب المستخدم نشط',
    'role' => 'الدور',
    'select_role' => 'اختر دوراً...',
    'current_password' => 'كلمة المرور الحالية',
    'new_password' => 'كلمة المرور الجديدة',
    'confirm_new_password' => 'تأكيد كلمة المرور الجديدة',    // Role Management
    'display_name' => 'اسم العرض',
    'permissions' => 'الصلاحيات',
    'check_all' => 'تحديد الكل',
    'clear_all' => 'إلغاء الكل',

    // Filter and Status Labels
    'all_tire_types' => 'جميع أنواع الإطارات',
    'all_decisions' => 'جميع القرارات',
    'all_statuses' => 'جميع الحالات',
    'filter_by_machine' => 'تصفية حسب الآلة',
    'repaired' => 'تم الإصلاح',
    'pending_repair' => 'في انتظار الإصلاح',    'scrapped' => 'خردة',
    'add_repair_steps' => 'إضافة خطوات الإصلاح',
    'not_available' => 'غير متاح',
    'is_repaired' => 'تم الإصلاح',
    'repair_information' => 'معلومات الإصلاح',
    'repair_id' => 'معرف الإصلاح',
    'repair_decision' => 'قرار الإصلاح',
    'repair_date' => 'تاريخ الإصلاح',    // Date Filter Labels
    'date_from' => 'من تاريخ',
    'date_to' => 'إلى تاريخ',

    // Validation Messages
    'required' => 'هذا الحقل مطلوب',
    'email_invalid' => 'يرجى إدخال عنوان بريد إلكتروني صحيح',
    'password_min_length' => 'كلمة المرور يجب أن تكون 8 أحرف على الأقل',
    'passwords_not_match' => 'كلمات المرور غير متطابقة',

];
