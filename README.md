# Contract Farming Application

This is a PHP-based contract farming application that connects farmers with contractors.

## Deployment to Vercel

This application is configured for deployment to Vercel with the following features:

1. **Vercel Configuration**: The `vercel.json` file configures the PHP runtime and routing
2. **Database Compatibility**: All database connections use `/tmp/my.db` on Vercel to comply with filesystem restrictions
3. **Build Script**: The `build.sh` script copies the database to the appropriate location during deployment

### Deployment Steps

1. Push this code to a GitHub repository
2. Log in to your Vercel account
3. Import the GitHub repository
4. Vercel will automatically detect the PHP project and use the configuration in `vercel.json`
5. The application will be deployed with the database properly configured

### Local Development

To run locally:
```bash
php -S localhost:8000
```

Visit http://localhost:8000 in your browser to access the application.