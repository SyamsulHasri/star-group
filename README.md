# STAR Media Group
This practical test is designed to evaluate your ability to develop a functional, responsive, and standards-compliant web application using PHP (version 7 or 8) and MySQL.  You are required to build a 4-page website that demonstrates your understanding of both frontend responsiveness and backend logic — including cookie management, database interaction, and user privacy compliance.

## Project Setup Guide
This document provides a detailed step-by-step guide to install and run a Laravel 12 project locally.
It includes Laravel UI authentication scaffolding using Bootstrap.

### Requirements
Before you begin, make sure the following are installed on your system:
- PHP >= 8.2
- Composer >= 2.5
- Node.js >= 18
- NPM or Yarn
- MySQL or MariaDB
- Git (optional)

### Clone the Repository
Download or clone the project repository.
1.USING GITHUB : git clone https://github.com/your-username/your-laravel-project.git
cd your-laravel-project
2. USING ZIP FILE : Extract zip file.

## 2. Install PHP Dependencies
Use Composer to install Laravel dependencies.
```bash
composer install
```

## 3. Install Node Modules
Install JavaScript dependencies required for front-end build.
```bash
npm install
```

## 4. Create and Configure .env File
Copy the example environment file and update settings for your local setup.
cp .env.example .env
```bash
APP_NAME='Laravel App'
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_app
DB_USERNAME=root
DB_PASSWORD=
```
## 5. Generate Application Key
Generate a unique encryption key for your application.
```bash
php artisan key:generate
```

## 6. Set Up Database
Create a new MySQL database and run migrations to set up tables.
CREATE DATABASE laravel_app;
```bash
php artisan migrate
```

## 7. Install Laravel UI Scaffolding
Add Laravel UI authentication scaffolding if it’s not already included.
```bash
composer require laravel/ui
php artisan ui bootstrap --auth
npm run dev
```

## 8. Run the Development Server
Start Laravel’s local development server.
```bash
php artisan serve
Visit: http://127.0.0.1:8000
```

### Installation
```bash
# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate
php artisan db:seed

# Start development server
php artisan serve  # Starts server, queue, logs, and Vite
or
npm run dev  # Starts server, queue, logs, and Vite
```


## Test User Accounts

The system includes predefined test users for each user type. All users have the password: `password`

### Admin & System Users

| Email | User Type | Name | Description |
|-------|-----------|------|-------------|
| `admin@example.com` | Admin | Admin | System administrator |


------------------------------------------------------------------------------------------------

Author <br>
Developed by Syamsul Hasri <br>
PHP / Laravel Developer <br>
■ syamsulhasri6@gmail.com <br>
■ https://github.com/SyamsulHasri <br>

