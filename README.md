# PHP User Management System

## Overview

This project is a simple user management system built with PHP and MySQL. It provides user registration, authentication, profile management, and an admin dashboard for managing users, roles, and account status. The project uses Composer for dependency management and follows a modular structure with PSR-4 autoloading.

## Features

- User registration and login
- User profile with photo upload
- Admin dashboard to view all users
- Role management (User, Manager, Admin)
- Account suspension and unsuspension
- User deletion
- Data seeding with Faker
- Bootstrap-based UI

## Project Structure

```
project/
├── admin.php           # Admin dashboard
├── index.php           # Login page
├── register.php        # Registration page
├── profile.php         # User profile
├── seed.php            # Data seeding script
├── composer.json       # Composer dependencies
├── _actions/           # Action scripts (login, register, role, suspend, etc.)
├── _classes/           # Helper and database classes
├── css/                # CSS files (Bootstrap, icons)
├── js/                 # JavaScript files (Bootstrap)
├── vendor/             # Composer dependencies
├── tests/              # Test scripts
```

## Setup Instructions

### Prerequisites
- PHP 7.4 or higher
- MySQL
- Composer

### Installation
1. **Clone the repository**
   ```bash
   git clone <repo-url>
   cd project
   ```
2. **Install dependencies**
   ```bash
   composer install
   ```
3. **Set up the database**
   - Create a MySQL database named `project`.
   - Create the following tables (example schema):

     ```sql
     CREATE TABLE roles (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(50)
     );
     INSERT INTO roles (name) VALUES ('User'), ('Manager'), ('Admin');

     CREATE TABLE users (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(100),
       email VARCHAR(100) UNIQUE,
       phone VARCHAR(20),
       address TEXT,
       password VARCHAR(255),
       photo VARCHAR(255),
       role_id INT DEFAULT 1,
       suspended TINYINT(1) DEFAULT 0,
       created_at DATETIME,
       FOREIGN KEY (role_id) REFERENCES roles(id)
     );
     ```

4. **Configure web server**
   - Set the document root to the `project` directory or access via `http://localhost/path/to/project`.
   - Update the base URL in `_classes/Helpers/HTTP.php` if needed.

5. **Seed the database (optional)**
   - Run the seeder to generate fake users:
     ```bash
     php seed.php
     ```

## Usage

- Visit `/index.php` to log in.
- Register a new user via `/register.php`.
- After login, access your profile at `/profile.php`.
- Admin users can access `/admin.php` to manage users, roles, and account status.

## Testing

Test scripts are available in the `tests/` directory:
- `auth.php` – Test authentication
- `find.php` – Test user lookup
- `table.php` – Test user insertion
- `mysql.php` – Test database connection
- `http.php` – Test HTTP redirects
- `module.php` – Miscellaneous module tests

Run tests with:
```bash
php tests/<testfile>.php
```

## Dependencies
- [fakerphp/faker](https://github.com/FakerPHP/Faker) – Fake data generation
- [Bootstrap](https://getbootstrap.com/) – UI framework

## License

This project is open source and available under the MIT License.
