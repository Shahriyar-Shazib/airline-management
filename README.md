# Airline Management API  
## Laravel Sanctum Authentication Setup Guide

This project is a basic Laravel application for airline management, featuring API token authentication using Laravel Sanctum. It includes migrations, seeders, and example API routes for authentication and user management.

---

## Prerequisites

- PHP >= 8.x
- Composer
- MySQL or any supported database
- Node.js & npm (optional, for frontend assets)

---

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Create and Configure `.env` File

Copy the example environment file and update your settings:

```bash
cp .env.example .env
```

Edit `.env` and set your database and environment variables:

```env
APP_NAME=AirlineManagementAPI
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password

SANCTUM_STATEFUL_DOMAINS=localhost,127.0.0.1
SESSION_DOMAIN=localhost
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations

Create the necessary tables for users and Sanctum tokens:

```bash
php artisan migrate
```

### 6. Seed the Database (Optional)

Populate your database with default users or roles:

```bash
php artisan db:seed
```

---

You now have a Laravel project set up with Sanctum authentication, ready for API development and user management.