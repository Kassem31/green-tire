<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.password_reset_request') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #f0f0f0;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .logo-text {
            color: #007bff;
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            padding: 30px;
            color: #333333;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666666;
            border-top: 1px solid #e9ecef;
        }
        .warning {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        @media (max-width: 600px) {
            .email-container {
                margin: 0;
                border-radius: 0;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            {{-- Try multiple approaches for the logo --}}
            @php
                $logoPath = public_path('src/assets/img/prometeon.jpg');
                $logoUrl = asset('src/assets/img/prometeon.jpg');
                $logoExists = file_exists($logoPath);
                
                // Try to create a full URL
                $fullLogoUrl = config('app.url') . '/src/assets/img/prometeon.jpg';
            @endphp
            
            {{-- First try: Direct URL (most compatible with email clients) --}}
            <img src="{{ $fullLogoUrl }}" alt="Prometeon Logo" class="logo" 
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            
            {{-- Fallback: Text logo --}}
            <h1 class="logo-text" style="display: none;">PROMETEON</h1>
        </div>
        
        <div class="content">
            <h2>{{ __('messages.password_reset_request') }}</h2>
            
            <p>{{ __('messages.hello_user') }} {{ $notifiable->name ?? 'User' }},</p>
            
            <p>{{ __('messages.password_reset_email_intro') }}</p>
            
            <div style="text-align: center;">
                <a href="{{ $url }}" class="button" style="color: white;">{{ __('messages.reset_password_button') }}</a>
            </div>
            
            <div class="warning">
                <strong>{{ __('messages.important') }}</strong> {{ __('messages.password_reset_link_expires', ['minutes' => $expireTime]) }}
            </div>
            
            <p>{{ __('messages.password_reset_no_action') }}</p>
            
            <p>{{ __('messages.password_reset_security') }}</p>
            
            <p>{{ __('messages.best_regards') }},<br>{{ __('messages.the_team', ['app' => config('app.name')]) }}</p>
        </div>
        
        <div class="footer">
            <p>{{ __('messages.trouble_clicking_button', ['button' => __('messages.reset_password_button')]) }}</p>
            <p style="word-break: break-all; color: #007bff;">{{ $url }}</p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('messages.all_rights_reserved') }}</p>
        </div>
    </div>
</body>
</html>
