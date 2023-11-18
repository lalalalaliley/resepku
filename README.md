<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Resepku

Aplikasi website untuk berbagi resep makanan untuk test teknis fullstack Meta Mata Internship 

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/lalalalaliley/resepku.git
   cd 
   ```

2. **Install Composer Dependencies:**
    ```bash
    composer install
    ```

3. **Copy the Environment File:**
    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

5. **Configurate Database:**
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=resepku
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

## Usage

1. **Run the Development Server:**
    ```bash
    php artisan serve
    ```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
