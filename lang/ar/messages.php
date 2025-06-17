<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Custom Messages Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for custom messages throughout
    | the application. You are free to modify these language lines according
    | to your application's requirements.
    |
    */    // General Messages
    'welcome' => 'مرحباً',
    'welcome_user' => 'مرحباً، :name!',
    'hello' => 'أهلاً وسهلاً',
    'goodbye' => 'مع السلامة',
    'thank_you' => 'شكراً لك',
    'please_wait' => 'يرجى الانتظار',
    'loading' => 'جاري التحميل...',
    'success' => 'تم بنجاح',
    'error' => 'خطأ',
    'warning' => 'تحذير',
    'info' => 'معلومات',
    'confirm' => 'تأكيد',
    'cancel' => 'إلغاء',
    'save' => 'حفظ',
    'edit' => 'تعديل',
    'delete' => 'حذف',
    'view' => 'عرض',
    'create' => 'إنشاء',
    'update' => 'تحديث',
    'submit' => 'إرسال',
    'reset' => 'إعادة تعيين',
    'search' => 'بحث',
    'filter' => 'تصفية',
    'export' => 'تصدير',
    'import' => 'استيراد',
    'print' => 'طباعة',
    'download' => 'تحميل',
    'upload' => 'رفع',
    'back' => 'رجوع',
    'next' => 'التالي',
    'previous' => 'السابق',
    'close' => 'إغلاق',
    'open' => 'فتح',
    'yes' => 'نعم',
    'no' => 'لا',

    // Authentication Messages
    'login' => 'تسجيل الدخول',
    'logout' => 'تسجيل الخروج',
    'register' => 'تسجيل جديد',
    'forgot_password' => 'نسيت كلمة المرور',
    'remember_me' => 'تذكرني',
    'login_successful' => 'تم تسجيل الدخول بنجاح',
    'logout_successful' => 'تم تسجيل الخروج بنجاح',
    'invalid_credentials' => 'بيانات الاعتماد غير صحيحة',
    'account_disabled' => 'الحساب معطل',
    'please_login' => 'يرجى تسجيل الدخول',

    // Form Messages
    'required_field' => 'هذا الحقل مطلوب',
    'optional_field' => 'هذا الحقل اختياري',
    'invalid_format' => 'تنسيق غير صحيح',
    'field_too_short' => 'هذا الحقل قصير جداً',
    'field_too_long' => 'هذا الحقل طويل جداً',
    'passwords_not_match' => 'كلمات المرور غير متطابقة',
    'email_already_exists' => 'البريد الإلكتروني موجود بالفعل',
    'username_already_exists' => 'اسم المستخدم موجود بالفعل',

    // CRUD Messages
    'created_successfully' => 'تم الإنشاء بنجاح',    'updated_successfully' => 'تم التحديث بنجاح',
    'deleted_successfully' => 'تم الحذف بنجاح',
    'operation_failed' => 'فشلت العملية',
    'no_records_found' => 'لم يتم العثور على سجلات',
    'confirm_delete' => 'هل أنت متأكد من الحذف؟',
    'confirm_delete_title' => 'هل أنت متأكد؟',
    'confirm_delete_text' => 'لن تتمكن من التراجع عن هذا الإجراء!',
    'confirm_delete_button' => 'نعم، احذفه!',
    'cannot_be_deleted' => 'لا يمكن حذف هذا العنصر',
    'action_not_allowed' => 'العملية غير مسموحة',

    // File Upload Messages
    'file_uploaded_successfully' => 'تم رفع الملف بنجاح',
    'file_upload_failed' => 'فشل في رفع الملف',
    'file_too_large' => 'حجم الملف كبير جداً',
    'invalid_file_type' => 'نوع الملف غير صالح',
    'file_not_found' => 'الملف غير موجود',

    // Navigation
    'home' => 'الرئيسية',
    'dashboard' => 'لوحة التحكم',
    'profile' => 'الملف الشخصي',
    'settings' => 'الإعدادات',
    'users' => 'المستخدمون',
    'reports' => 'التقارير',
    'help' => 'المساعدة',
    'about' => 'حول',
    'contact' => 'اتصل بنا',

    // Time and Date
    'today' => 'اليوم',
    'yesterday' => 'أمس',
    'tomorrow' => 'غداً',
    'this_week' => 'هذا الأسبوع',
    'this_month' => 'هذا الشهر',
    'this_year' => 'هذا العام',
    'last_week' => 'الأسبوع الماضي',
    'last_month' => 'الشهر الماضي',
    'last_year' => 'العام الماضي',

    // Pagination
    'showing' => 'عرض',
    'to' => 'إلى',
    'of' => 'من',
    'results' => 'نتيجة',
    'no_data' => 'لا توجد بيانات',    // Language switching
    'language_changed_successfully' => 'تم تغيير اللغة بنجاح',
    'invalid_language' => 'اللغة المحددة غير صالحة',
    'select_language' => 'اختر اللغة',
    'test' => 'اختبار',
    'language_switching' => 'تبديل اللغة',    // Observations Module Messages
    'observation_created_successfully' => 'تم إنشاء الملاحظة بنجاح',
    'observation_updated_successfully' => 'تم تحديث الملاحظة بنجاح',
    'observation_deleted_successfully' => 'تم حذف الملاحظة بنجاح',
    'observation_cannot_be_deleted' => 'لا يمكن حذف هذه الملاحظة لأنها مستخدمة في معاملات التفتيش',

    // Repair Steps Module Messages
    'repair_step_created_successfully' => 'تم إنشاء خطوة الإصلاح بنجاح',
    'repair_step_updated_successfully' => 'تم تحديث خطوة الإصلاح بنجاح',
    'repair_step_deleted_successfully' => 'تم حذف خطوة الإصلاح بنجاح',
    'repair_step_cannot_be_deleted' => 'لا يمكن حذف خطوة الإصلاح هذه لأنها مستخدمة في معاملات الإصلاح',

    // Repair Transactions Module Messages
    'repair_transaction_created_successfully' => 'تم إنشاء معاملة الإصلاح بنجاح',
    'repair_transaction_updated_successfully' => 'تم تحديث معاملة الإصلاح بنجاح',
    'repair_transaction_deleted_successfully' => 'تم حذف معاملة الإصلاح بنجاح',
    'inspection_id_required' => 'معرف التفتيش مطلوب لإنشاء معاملة إصلاح',
    'inspection_already_has_repair' => 'هذا التفتيش يحتوي بالفعل على معاملة إصلاح. يمكنك تعديلها هنا',
    'only_repair_decision_allowed' => 'يمكن إضافة خطوات الإصلاح فقط لمعاملات التفتيش التي قررت "الإصلاح"',

    // Inspection Transactions Module Messages
    'inspection_transaction_created_successfully' => 'تم إنشاء معاملة التفتيش بنجاح',
    'inspection_transaction_updated_successfully' => 'تم تحديث معاملة التفتيش بنجاح',
    'inspection_transaction_deleted_successfully' => 'تم حذف معاملة التفتيش بنجاح',
    'barcode_already_exists' => 'هذا الباركود موجود بالفعل في النظام. يرجى استخدام باركود مختلف',
    'barcode_not_in_manufacturing' => 'الباركود غير موجود في نظام التصنيع. يرجى استخدام باركود صالح',
    'barcode_validation_error' => 'حدث خطأ أثناء التحقق من الباركود. يرجى المحاولة مرة أخرى',
    'barcode_used_by_another' => 'هذا الباركود مستخدم بالفعل من قبل معاملة أخرى. يرجى استخدام باركود مختلف',

    // Tire Types Module Messages
    'tire_type_created_successfully' => 'تم إنشاء نوع الإطار بنجاح',
    'tire_type_updated_successfully' => 'تم تحديث نوع الإطار بنجاح',
    'tire_type_deleted_successfully' => 'تم حذف نوع الإطار بنجاح',

    // User Management Messages
    'user_created_successfully' => 'تم إنشاء المستخدم بنجاح',
    'user_updated_successfully' => 'تم تحديث المستخدم بنجاح',
    'user_deleted_successfully' => 'تم حذف المستخدم بنجاح',
    'password_reset_successfully' => 'تم إعادة تعيين كلمة المرور بنجاح',
    'logged_out_successfully' => 'تم تسجيل الخروج بنجاح',

    // Role Management Messages
    'role_created_successfully' => 'تم إنشاء الدور بنجاح',
    'role_updated_successfully' => 'تم تحديث الدور بنجاح',
    'role_deleted_successfully' => 'تم حذف الدور بنجاح',

    // Status Messages
    'status_pending' => 'في الانتظار',
    'status_completed' => 'مكتمل',
    'status_in_progress' => 'قيد التنفيذ',
    'status_cancelled' => 'ملغي',
    'status_approved' => 'موافق عليه',
    'status_rejected' => 'مرفوض',

    // Decision Messages
    'decision_repair' => 'إصلاح',
    'decision_scrap' => 'إتلاف',
    'decision_pending' => 'في الانتظار',

    // General Actions
    'add_repair_steps' => 'إضافة خطوات الإصلاح',
    'select_repair_step' => 'اختر خطوة إصلاح',
    'selected_steps' => 'الخطوات المختارة',
    'please_select_repair_step' => 'يرجى اختيار خطوة إصلاح',
    'repair_step_already_added' => 'تم إضافة خطوة الإصلاح هذه بالفعل',
    'add_at_least_one_repair_step' => 'يرجى إضافة خطوة إصلاح واحدة على الأقل للقرار بالإصلاح',
    'no_repair_steps_added' => 'لم يتم إضافة أي خطوات إصلاح',    'observation_already_added' => 'تم إضافة هذه الملاحظة بالفعل',    // Confirmation Messages
    'confirm_delete_repair_transaction' => 'هل أنت متأكد من حذف معاملة الإصلاح هذه؟',
    'no_repair_transactions_found' => 'لم يتم العثور على معاملات إصلاح.',

    // Email Messages
    'password_reset_request' => 'طلب إعادة تعيين كلمة المرور',
    'hello_user' => 'مرحباً',
    'password_reset_email_intro' => 'تتلقى هذا البريد الإلكتروني لأننا تلقينا طلب إعادة تعيين كلمة المرور لحسابك.',
    'reset_password_button' => 'إعادة تعيين كلمة المرور',
    'password_reset_link_expires' => 'سينتهي صلاحية رابط إعادة تعيين كلمة المرور خلال :minutes دقيقة.',
    'password_reset_no_action' => 'إذا لم تطلب إعادة تعيين كلمة المرور، فلا حاجة لاتخاذ أي إجراء آخر. ستبقى كلمة المرور الخاصة بك دون تغيير.',
    'password_reset_security' => 'لأسباب أمنية، يرجى عدم مشاركة هذا البريد الإلكتروني مع أي شخص.',
    'best_regards' => 'مع أطيب التحيات',
    'the_team' => 'فريق :app',
    'trouble_clicking_button' => 'إذا كنت تواجه مشكلة في النقر على زر ":button"، انسخ والصق الرابط أدناه في متصفح الويب الخاص بك:',
    'all_rights_reserved' => 'جميع الحقوق محفوظة.',
    'important' => 'مهم:',

];