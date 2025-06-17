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
    'welcome' => 'Welcome',
    'welcome_user' => 'Welcome, :name!',
    'hello' => 'Hello',
    'goodbye' => 'Goodbye',
    'thank_you' => 'Thank you',
    'please_wait' => 'Please wait',
    'loading' => 'Loading...',
    'success' => 'Success',
    'error' => 'Error',
    'warning' => 'Warning',
    'info' => 'Information',
    'confirm' => 'Confirm',
    'cancel' => 'Cancel',
    'save' => 'Save',
    'edit' => 'Edit',
    'delete' => 'Delete',
    'view' => 'View',
    'create' => 'Create',
    'update' => 'Update',
    'submit' => 'Submit',
    'reset' => 'Reset',
    'search' => 'Search',
    'filter' => 'Filter',
    'export' => 'Export',
    'import' => 'Import',
    'print' => 'Print',
    'download' => 'Download',
    'upload' => 'Upload',
    'back' => 'Back',
    'next' => 'Next',
    'previous' => 'Previous',
    'close' => 'Close',
    'open' => 'Open',
    'yes' => 'Yes',
    'no' => 'No',

    // Authentication Messages
    'login' => 'Login',
    'logout' => 'Logout',
    'register' => 'Register',
    'forgot_password' => 'Forgot Password',
    'remember_me' => 'Remember Me',
    'login_successful' => 'Login successful',
    'logout_successful' => 'Logout successful',
    'invalid_credentials' => 'Invalid credentials',
    'account_disabled' => 'Account disabled',
    'please_login' => 'Please login',

    // Form Messages
    'required_field' => 'This field is required',
    'optional_field' => 'This field is optional',
    'invalid_format' => 'Invalid format',
    'field_too_short' => 'This field is too short',
    'field_too_long' => 'This field is too long',
    'passwords_not_match' => 'Passwords do not match',
    'email_already_exists' => 'Email already exists',
    'username_already_exists' => 'Username already exists',

    // CRUD Messages
    'created_successfully' => 'Created successfully',    'updated_successfully' => 'Updated successfully',
    'deleted_successfully' => 'Deleted successfully',
    'operation_failed' => 'Operation failed',
    'no_records_found' => 'No records found',
    'confirm_delete' => 'Are you sure you want to delete?',
    'confirm_delete_title' => 'Are you sure?',
    'confirm_delete_text' => "You won't be able to revert this!",
    'confirm_delete_button' => 'Yes, delete it!',
    'cannot_be_deleted' => 'This item cannot be deleted',
    'action_not_allowed' => 'Action not allowed',

    // File Upload Messages
    'file_uploaded_successfully' => 'File uploaded successfully',
    'file_upload_failed' => 'File upload failed',
    'file_too_large' => 'File is too large',
    'invalid_file_type' => 'Invalid file type',
    'file_not_found' => 'File not found',

    // Navigation
    'home' => 'Home',
    'dashboard' => 'Dashboard',
    'profile' => 'Profile',
    'settings' => 'Settings',
    'users' => 'Users',
    'reports' => 'Reports',
    'help' => 'Help',
    'about' => 'About',
    'contact' => 'Contact Us',

    // Time and Date
    'today' => 'Today',
    'yesterday' => 'Yesterday',
    'tomorrow' => 'Tomorrow',
    'this_week' => 'This week',
    'this_month' => 'This month',
    'this_year' => 'This year',
    'last_week' => 'Last week',
    'last_month' => 'Last month',
    'last_year' => 'Last year',

    // Pagination
    'showing' => 'Showing',
    'to' => 'to',
    'of' => 'of',
    'results' => 'results',
    'no_data' => 'No data available',    // Language switching
    'language_changed_successfully' => 'Language changed successfully',
    'invalid_language' => 'Invalid language selected',
    'select_language' => 'Select Language',
    'test' => 'Test',
    'language_switching' => 'Language Switching',    // Observations Module Messages
    'observation_created_successfully' => 'Observation created successfully',
    'observation_updated_successfully' => 'Observation updated successfully',
    'observation_deleted_successfully' => 'Observation deleted successfully',
    'observation_cannot_be_deleted' => 'Cannot delete this observation as it is being used in inspection transactions',

    // Repair Steps Module Messages
    'repair_step_created_successfully' => 'Repair step created successfully',
    'repair_step_updated_successfully' => 'Repair step updated successfully',
    'repair_step_deleted_successfully' => 'Repair step deleted successfully',
    'repair_step_cannot_be_deleted' => 'Cannot delete this repair step as it is being used in repair transactions',

    // Repair Transactions Module Messages
    'repair_transaction_created_successfully' => 'Repair transaction created successfully',
    'repair_transaction_updated_successfully' => 'Repair transaction updated successfully',
    'repair_transaction_deleted_successfully' => 'Repair transaction deleted successfully',
    'inspection_id_required' => 'Inspection ID is required to create a repair transaction',
    'inspection_already_has_repair' => 'This inspection already has a repair transaction. You can edit it here',
    'only_repair_decision_allowed' => 'Only inspection transactions with "repair" decision can have repair steps added',

    // Inspection Transactions Module Messages
    'inspection_transaction_created_successfully' => 'Inspection transaction created successfully',
    'inspection_transaction_updated_successfully' => 'Inspection transaction updated successfully',
    'inspection_transaction_deleted_successfully' => 'Inspection transaction deleted successfully',
    'barcode_already_exists' => 'This barcode already exists in the system. Please use a different barcode',
    'barcode_not_in_manufacturing' => 'The barcode does not exist in the manufacturing system. Please use a valid barcode',
    'barcode_validation_error' => 'An error occurred while validating the barcode. Please try again',
    'barcode_used_by_another' => 'This barcode is already used by another transaction. Please use a different barcode',

    // Tire Types Module Messages
    'tire_type_created_successfully' => 'Tire type created successfully',
    'tire_type_updated_successfully' => 'Tire type updated successfully',
    'tire_type_deleted_successfully' => 'Tire type deleted successfully',

    // User Management Messages
    'user_created_successfully' => 'User created successfully',
    'user_updated_successfully' => 'User updated successfully',
    'user_deleted_successfully' => 'User deleted successfully',
    'password_reset_successfully' => 'Password reset successfully',
    'logged_out_successfully' => 'Logged out successfully',

    // Role Management Messages
    'role_created_successfully' => 'Role created successfully',
    'role_updated_successfully' => 'Role updated successfully',
    'role_deleted_successfully' => 'Role deleted successfully',

    // Status Messages
    'status_pending' => 'Pending',
    'status_completed' => 'Completed',
    'status_in_progress' => 'In Progress',
    'status_cancelled' => 'Cancelled',
    'status_approved' => 'Approved',
    'status_rejected' => 'Rejected',

    // Decision Messages
    'decision_repair' => 'Repair',
    'decision_scrap' => 'Scrap',
    'decision_pending' => 'Pending',

    // General Actions
    'add_repair_steps' => 'Add Repair Steps',
    'select_repair_step' => 'Select a repair step',
    'selected_steps' => 'Selected Steps',
    'please_select_repair_step' => 'Please select a repair step',
    'repair_step_already_added' => 'This repair step has already been added',
    'add_at_least_one_repair_step' => 'Please add at least one repair step for repair decision',
    'no_repair_steps_added' => 'No repair steps have been added',    'observation_already_added' => 'This observation has already been added',    // Confirmation Messages
    'confirm_delete_repair_transaction' => 'Are you sure you want to delete this repair transaction?',
    'no_repair_transactions_found' => 'No repair transactions found.',

    // Email Messages
    'password_reset_request' => 'Password Reset Request',
    'hello_user' => 'Hello',
    'password_reset_email_intro' => 'You are receiving this email because we received a password reset request for your account.',
    'reset_password_button' => 'Reset Password',
    'password_reset_link_expires' => 'This password reset link will expire in :minutes minutes.',
    'password_reset_no_action' => 'If you did not request a password reset, no further action is required. Your password will remain unchanged.',
    'password_reset_security' => 'For security reasons, please do not share this email with anyone.',
    'best_regards' => 'Best regards',
    'the_team' => 'The :app Team',
    'trouble_clicking_button' => 'If you\'re having trouble clicking the ":button" button, copy and paste the URL below into your web browser:',
    'all_rights_reserved' => 'All rights reserved.',
    'important' => 'Important:',

];
