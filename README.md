# Laravel Learning Management System (LMS)

This Laravel application allows users to register and authenticate, manage courses (CRUD operations), and submit a contact form that sends an email to the admin.

## Features

- User registration with name, email, and password
- User authentication (login/logout)
- Authenticated users can create, read, update, and delete courses
- Each course includes a title, description, start date, and end date
- Contact form with name, email, and message fields
- Contact form submission sends an email to the admin email address

## Requirements

- PHP >= 8.2
- Laravel 11
- Composer
- A web server (e.g., Apache)
- Database (e.g., MySQL)
- Mail service configured for sending emails (e.g., mailgun)
- Node.js (for frontend assets)

## Installation Instructions

### 1. Clone the repository
```bash
git clone https://github.com/Randa-Abdellatif/Learning-Management-System.git
cd Learning-Management-System 
```


### 2. Backend setup
```bash
composer install
cp .env.example .env
php artisan migrate
```


### 3. Frontend setup
```bash
npm install
npm run dev
```


### 4. Serve the app
```bash
php artisan serve
```
## .env Configuration
Update your .env file:

#### Application
```ini
APP_NAME="Laravel Course Management"
APP_URL=http://localhost
```

#### Database
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

#### Mail (example using mailgun)
```ini
MAIL_MAILER=mailgun
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=no-reply@example.com
MAIL_FROM_NAME="Laravel Course Management"
MAILGUN_DOMAIN=your-mailgun-domain.com
MAILGUN_SECRET=your-mailgun-api-key
MAILGUN_ENDPOINT=api.mailgun.net
```


#### Admin email to receive contact form messages
```ini
ADMIN_EMAIL=admin@example.com
```


## Application Usage
Register a new user at /register with your name, email, and password.
After registration or login, you will be redirected to the dashboard at /home.
The dashboard has Browse All as buttons or boxes that shows the list of courses.  
From there, you can view course details, and manage courses by creating, editing, or deleting.
To submit a message to the admin, visit the contact form at /contact.
The message will be emailed to the admin email configured in .env.

## Important Notes
All course pages and actions require authentication.
Passwords are securely hashed using Laravel’s built-in hashing.
The contact form uses Laravel’s mailing system; verify your mail credentials are correct for successful email delivery.

## Troubleshooting
Check your .env configuration for proper database and mail setup.
Review logs for errors at storage/logs/laravel.log.
Make sure your database server is running.
Ensure mail credentials are valid.