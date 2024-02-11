# URL Shortener

## Setup Guide

Follow these steps to set up and run the URL shortener project locally on your machine.

### Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- PHP (version 8 or higher)
- Composer
- Node.js and npm (for running frontend assets if applicable)
- MySQL or any other compatible database server

### Installation

1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/montaser-dev/URL-Shortener.git```

2. Navigate to the project directory:
   ```bash
   cd URL-Shortener```

3. Install PHP dependencies using Composer:
   ```bash
   composer install```

4. Configure your database connection in the .env file:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

5. Run database migrations to create the necessary tables:
   ```bash
    php artisan migrate```

### Running the Application

To start the development server, run the following commands:
   ```bash
    php artisan serve
    npm install && npm run dev```




