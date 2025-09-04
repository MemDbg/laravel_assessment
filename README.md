# Laravel Assessment

## Setup

### Requirements
- PHP 8.1
- MySQL
- Composer

### Steps

1. **Install dependencies**
```bash
composer install
````

2. **Copy environment file**

```bash
copy .env.example .env
```

3. **Generate application key**

```bash
php artisan key:generate
```

4. **Set up database**

* Create a new database called `laravel_crud` in MySQL.
* Under `laravel_crud` database, run the script inside `db_schema.sql`.
* Run migrations and seed the admin user:

```bash
php artisan migrate --seed
```

5. **Start the development server**

```bash
php artisan serve
```

Runs the application locally. Open your browser at `http://127.0.0.1:8000` to access it.

---

## Sample Credentials

* **Email:** `admin@example.com`
* **Password:** `password`
