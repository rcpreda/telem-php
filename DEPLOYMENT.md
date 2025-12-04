# Deployment Instructions for Ploi.io

## Initial Setup

### 0. Install PHP 8.4 on Server (if needed)

If your server doesn't have PHP 8.4:

1. Go to your Server in Ploi dashboard
2. Navigate to "Server" → "PHP"
3. Click "Install PHP Version"
4. Select PHP 8.4
5. Wait for installation to complete
6. Set PHP 8.4 as default (optional)

### 1. Create Site in Ploi
- Log into your Ploi.io dashboard
- Create a new site with your domain
- **IMPORTANT: Select PHP 8.4** (this project requires PHP 8.4+)
  - If PHP 8.4 is not available, install it first in Server Settings
- Choose Laravel as the application type

### 2. Configure Repository
- Connect your Git repository (GitHub/GitLab/Bitbucket)
- Set the branch to `main` (or your production branch)
- Enable "Quick Deploy" if desired

### 3. Environment Variables
Configure the following environment variables in Ploi:

```env
APP_NAME="Laravel"
APP_ENV=production
APP_KEY=base64:your-key-here
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Add other environment variables as needed
```

### 4. Deploy Script Configuration

In Ploi, go to your site's "Deploy Script" section and replace it with the contents of `deploy.sh`:

Or simply paste this command:
```bash
bash deploy.sh
```

### 5. Update Deploy Script Path

Edit `deploy.sh` and update the project directory path:
```bash
cd /home/ploi/your-actual-domain.com
```

Replace `crm-admin.test` with your actual domain/path.

## Deployment Process

### Manual Deployment
1. Go to your site in Ploi dashboard
2. Click "Deploy Now" button
3. Monitor the deployment output for any errors

### Automatic Deployment
If "Quick Deploy" is enabled:
- Every push to the configured branch will trigger automatic deployment
- Monitor deployments in the Ploi dashboard

## Important Notes About Assets

### Static Assets (Logos, Images)
- Company logos and static images are stored in `storage/app/public/logos/`
- These files **are committed to Git** (exception to Laravel's default)
- The deploy script automatically creates the symlink: `public/storage` → `storage/app/public`
- Access them in views via: `asset('storage/logos/default.png')`

### User Uploaded Files
- User-uploaded files should go in `storage/app/public/uploads/` (or similar)
- These files **should NOT be in Git**
- Add to `storage/app/public/.gitignore` if needed

## Post-Deployment Checklist

After first deployment:

1. **Generate Application Key** (if not set):
   ```bash
   php artisan key:generate
   ```

2. **Run Migrations**:
   ```bash
   php artisan migrate --force
   ```

3. **Verify Storage Link** (already done by deploy script):
   ```bash
   php artisan storage:link
   ```

   This creates a symlink from `public/storage` to `storage/app/public`, making your logos and uploaded files accessible.

4. **Set Permissions**:
   ```bash
   chmod -R 755 storage bootstrap/cache
   chmod -R 775 storage/app/public
   ```

5. **Test the Application**:
   - Visit your domain
   - Check all pages load correctly
   - Verify database connections
   - Test file uploads

## Queue Workers (Optional)

If your application uses queues:

1. In Ploi, go to "Queue" section
2. Add a new queue worker:
   - Connection: `redis` or `database`
   - Queue: `default`
   - Processes: `1` (adjust as needed)

## Scheduler (Optional)

If your application uses Laravel Scheduler:

1. In Ploi, the cron job is automatically configured
2. Verify it's running: `* * * * * cd /home/ploi/your-domain.com && php artisan schedule:run >> /dev/null 2>&1`

## SSL Certificate

Ploi automatically provisions Let's Encrypt SSL:
1. Go to "SSL" section in your site
2. Click "Install Certificate"
3. Wait for certificate to be issued
4. Enable "Force HTTPS"

## Monitoring

Monitor your application:
- Check deployment logs in Ploi
- Monitor server resources
- Set up error tracking (Sentry, Bugsnag, etc.)

## Troubleshooting

### PHP Version Mismatch Error

If you see errors like:
```
symfony/clock v8.0.0 requires php >=8.4 -> your php version (8.3.x) does not satisfy that requirement.
```

**Solution:**
1. Install PHP 8.4 on your server (see step 0 above)
2. Change your site's PHP version to 8.4:
   - Go to Site → Settings → PHP Version
   - Select PHP 8.4
3. Redeploy

### Deployment Fails
1. Check deployment output in Ploi
2. Verify all environment variables are set
3. Check file permissions
4. Review Laravel logs: `storage/logs/laravel.log`

### 500 Server Error
1. Enable `APP_DEBUG=true` temporarily
2. Check logs in `storage/logs/`
3. Verify `.env` file exists and is correct
4. Clear all caches: `php artisan optimize:clear`

### Assets Not Loading
1. Verify `npm run build` completed successfully
2. Check `public/build` directory exists
3. Clear browser cache
4. Verify `APP_URL` is correct in `.env`

### Database Connection Error
1. Verify database credentials in `.env`
2. Check database user has proper permissions
3. Test connection from server: `php artisan tinker` then `DB::connection()->getPdo();`

## Rollback

If deployment fails:
1. Go to Ploi dashboard
2. Navigate to "Deployments" section
3. Find previous successful deployment
4. Click "Redeploy" on that version

Or via SSH:
```bash
cd /home/ploi/your-domain.com
git reset --hard HEAD~1
bash deploy.sh
```

## Support

For Ploi-specific issues:
- Documentation: https://developers.ploi.io
- Support: https://ploi.io/support

For application issues:
- Check Laravel logs: `storage/logs/laravel.log`
- Review deployment script output
- Test locally first
