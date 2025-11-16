# Laravel Application - E-commerce Backend

This is the backend for an E-commerce project built with Laravel.

## Prerequisites

Make sure you have the following installed on your machine:

- [PHP](https://www.php.net/) (v8.0 or higher recommended)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or any database supported by Laravel
- [Laravel](https://laravel.com/docs/installation)

## Setup & Run

1. **Clone the repository**:

   ```bash
   git clone <https://github.com/asadshiekh/e-commerce-backend>
   cd e-commerce-backend
   ```

2. **Install dependencies**:

   ```bash
   composer update
   ```

3. **Configure environment**:

   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Set up your database credentials in the `.env` file:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password
     ```

4. **Run migrations**:

   ```bash
   php artisan migrate
   ```

5. **Run the application** (using built-in PHP server or your local setup):

   ```bash
   php artisan serve
   ```

6. **Access the API endpoint**:

   Open in your browser or API client: [http://localhost/e-commerce-backend/api/products](http://localhost/e-commerce-backend/api/products)  
   This will load all products.

## Project Structure

```
├── app/             # Core application code
├── database/        # Migrations and seeds
├── routes/          # API and web routes
├── public/          # Publicly accessible files
├── composer.json    # PHP dependencies
└── README.md
```

## Notes

- Make sure your database is running before running migrations.
- The main API endpoint to test is `/api/products`.
- Ensure Composer dependencies are updated before running the project.

