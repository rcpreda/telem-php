<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            border-bottom: 3px solid #ef4444;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            color: #1f2937;
            font-size: 24px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 600;
            color: #4b5563;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        .field-value {
            color: #1f2937;
            font-size: 16px;
            padding: 10px;
            background-color: #f9fafb;
            border-left: 3px solid #ef4444;
            border-radius: 4px;
        }
        .message-box {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 15px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            font-size: 12px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>

        <div class="field">
            <div class="field-label">Name</div>
            <div class="field-value">
                {{ $firstName }}{{ $lastName ? ' ' . $lastName : '' }}
            </div>
        </div>

        <div class="field">
            <div class="field-label">Email</div>
            <div class="field-value">
                <a href="mailto:{{ $email }}" style="color: #ef4444; text-decoration: none;">{{ $email }}</a>
            </div>
        </div>

        @if($phone)
        <div class="field">
            <div class="field-label">Phone</div>
            <div class="field-value">
                <a href="tel:{{ $phone }}" style="color: #ef4444; text-decoration: none;">{{ $phone }}</a>
            </div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Subject</div>
            <div class="field-value">{{ $formSubject }}</div>
        </div>

        <div class="field">
            <div class="field-label">Message</div>
            <div class="message-box">{{ $formMessage }}</div>
        </div>

        <div class="footer">
            <p>This email was sent from the contact form on {{ config('app.name') }}</p>
            <p>Received at {{ now()->format('F j, Y g:i A') }}</p>
        </div>
    </div>
</body>
</html>
