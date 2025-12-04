# SendGrid Email Setup

This application uses SendGrid to send contact form emails.

## Configuration

### 1. Get SendGrid API Key

1. Create a SendGrid account at https://sendgrid.com
2. Go to Settings → API Keys
3. Create a new API key with "Mail Send" permissions
4. Copy the API key (you'll only see it once!)

### 2. Configure Environment Variables

Add these to your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key-here
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="contact@ex3mtech.com"
MAIL_FROM_NAME="${APP_NAME}"
MAIL_CONTACT_RECIPIENT="contact@ex3mtech.com"
```

**Important:**
- `MAIL_USERNAME` must be exactly `apikey` (not your SendGrid username)
- `MAIL_PASSWORD` is your SendGrid API key
- `MAIL_FROM_ADDRESS` must be a verified sender in SendGrid
- `MAIL_CONTACT_RECIPIENT` is where contact form emails will be sent

### 3. Verify Sender Email

In SendGrid dashboard:
1. Go to Settings → Sender Authentication
2. Verify your domain OR
3. Add single sender verification for `contact@ex3mtech.com`

## Testing

### Test Email Locally

1. Make sure your `.env` is configured
2. Visit `/contact` page
3. Fill out and submit the contact form
4. Check SendGrid Activity Feed for delivery status

### Test via Tinker

```bash
php artisan tinker
```

```php
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

Mail::to('test@example.com')->send(
    new ContactFormMail(
        firstName: 'John',
        lastName: 'Doe',
        email: 'john@example.com',
        phone: '+1234567890',
        subject: 'Test Subject',
        message: 'This is a test message.'
    )
);
```

## Files Created

- `app/Http/Controllers/ContactController.php` - Handles form submission
- `app/Http/Requests/ContactFormRequest.php` - Validates form data
- `app/Mail/ContactFormMail.php` - Email mailable class
- `resources/views/emails/contact-form.blade.php` - Email template
- `routes/web.php` - Added POST route for contact form
- `config/mail.php` - Added contact recipient configuration

## How It Works

1. User fills out contact form at `/contact`
2. Form is submitted via POST to `/contact`
3. `ContactFormRequest` validates the data
4. `ContactController::send()` creates and sends email via SendGrid
5. Success/error message is shown to user
6. Email is sent from `contact@ex3mtech.com`
7. Email arrives at `MAIL_CONTACT_RECIPIENT`
8. Reply-To is set to user's email for easy response

## Email Features

✅ Professional HTML template with styling
✅ All form fields included (name, email, phone, subject, message)
✅ Reply-To header set to user's email
✅ Timestamp of submission
✅ Mobile responsive design
✅ Dark mode compatible
✅ Error logging for debugging

## Troubleshooting

### Email not sending

1. **Check SendGrid API Key**
   - Verify key has "Mail Send" permission
   - Check key is not expired

2. **Check Sender Verification**
   - `contact@ex3mtech.com` must be verified in SendGrid
   - Or domain `ex3mtech.com` must be authenticated

3. **Check Laravel Logs**
   ```bash
   tail -f storage/logs/laravel.log
   ```

4. **Check SendGrid Activity**
   - Login to SendGrid
   - Go to Activity Feed
   - Look for your email and check status

### Common Issues

**"From address not verified"**
- Solution: Verify sender email in SendGrid dashboard

**"API key invalid"**
- Solution: Create new API key, update `.env`, clear config cache:
  ```bash
  php artisan config:clear
  ```

**"Connection timeout"**
- Solution: Check firewall allows port 587
- Alternative: Use port 2525 or 465 (SSL)

## Queue Configuration (Optional)

For better performance, queue emails instead of sending immediately:

1. Update `ContactFormMail` to implement `ShouldQueue`:
   ```php
   class ContactFormMail extends Mailable implements ShouldQueue
   ```

2. Make sure queue worker is running:
   ```bash
   php artisan queue:work
   ```

3. In production (Ploi), configure queue worker in dashboard

## Rate Limits

SendGrid free tier:
- 100 emails/day
- If you need more, upgrade your SendGrid plan

## Support

- SendGrid Docs: https://docs.sendgrid.com
- Laravel Mail Docs: https://laravel.com/docs/mail
