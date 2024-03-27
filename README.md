# VAT Calculator Project

This project is a simple VAT calculator built with Laravel.

## Getting Started

Follow these instructions to get the project up and running on your local machine.

### Prerequisites

You need to have the following software installed on your machine:

- PHP (>= 7.4)
- Composer
- MySQL or any other compatible database server
- Node.js and NPM (optional, only required if you want to compile assets)

### Installing

1. Clone the repository to your local machine:

```bash
2. Navigate into the project directory:
    cd vat-calculator
3 . Install PHP dependencies using Composer:
    composer install
4. Create a copy of the .env.example file and rename it to .env:
   cp .env.example .env
5. Generate a new application key:
  php artisan key:generate

6. Configure your database connection in the .env file:
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=your_database_username
  DB_PASSWORD=your_database_password
7. Run the database migrations to create necessary tables:
   php artisan migrate
8. Serve the application:
    php artisan serve
Usage

    Open the application in your web browser.
    Enter the amount and VAT rate (in percentage) in the provided form.
    Click on the "Calculate" button to see the result.

