# Login System

A simple PHP authentication system built with MySQL database.

## Features

- User registration with validation
- Secure login with password hashing
- Session-based authentication
- Protected dashboard page
- Logout functionality

## Requirements

- PHP 7.4 or higher
- MySQL/MariaDB
- XAMPP/WAMP/MAMP or any PHP server

## Installation

1. Clone or download the project files to your web server directory (htdocs for XAMPP)

2. Import the database:
   - Open phpMyAdmin
   - Create a new database or import the SQL file
   - Import `database.sql` from the project folder

3. Configure database connection:
   - Open `config.php`
   - Update credentials if needed (default XAMPP settings: root with no password)

4. Access the application:
   - Start Apache and MySQL in XAMPP Control Panel
   - Open browser and navigate to: `http://localhost/DEBBIE/`

## File Structure

```
DEBBIE/
├── config.php          # Database connection and helper functions
├── database.sql        # Database schema
├── index.php           # Landing page
├── login.php           # Login form
├── register.php        # Registration form
├── logout.php          # Logout handler
├── dashboard.php       # Protected user dashboard
├── style.css           # Application styles
└── README.md           # Documentation
```

## Security Features

- Password hashing using bcrypt (`password_hash()`)
- SQL injection prevention using prepared statements
- XSS protection with `htmlspecialchars()`
- Session fixation protection with `session_regenerate_id()`
- Input validation and sanitization

## Default Database Configuration

```php
$host = 'localhost';
$db   = 'login_system';
$user = 'root';
$pass = '';
```

## Usage

1. Register a new account via the registration page
2. Login with your credentials
3. Access the protected dashboard
4. Logout when finished

## Notes

- Change default database credentials in production
- Ensure proper file permissions for security
- Keep PHP and MySQL updated to latest stable versions
