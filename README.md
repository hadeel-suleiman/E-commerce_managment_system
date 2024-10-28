# E-Commerce Management System


## Description
This project is a **E-Commerce Management System** built with **Laravel 10**. The system of project allows for the management of users, products, categories, and orders, providing both admin and customer functionalities. The application employs Laravel Sanctum for API authentication and includes middleware to restrict access to the admin dashboard.The project follows **repository design patterns** and incorporates **clean code** and **refactoring principles**.

### Key Features:
- **User Roles:** Supports Admin and Customer roles.
- **Product Management:** Admins can create, read, update, and soft delete products.
- **Category Management:** Products can belong to multiple categories, and categories can contain multiple products.
- **Order Management:** Customers can place orders for products.
- **API Endpoints:** Provides endpoints for authentication, product listing, and order placement.
**Middleware**: 
A simple middleware will be created to restrict access to the admin dashboard so that only users with the Admin role can access it.

## Seeders

I have created a seeder for the admin user to facilitate the initial setup of the application. This seeder will populate the database with an admin account, making it easier to manage the application from the start.

### Running the Seeder

To run the seeder, follow these steps:

1. Open your terminal or command prompt.
2. Navigate to your project directory.
3. Run the following command:

   ```bash
   php artisan db:seed

## API Endpoints

1. Authentication Endpoints
   - Register User
   - Login User
   - Logout User

2. Product Endpoints
   - GET /api/products (List all products)
   - GET /api/products/category/{id} (List products by category)

3. Order Endpoints
   - POST /api/orders (Place an order)




### Technologies Used:
- **Laravel 10**
- **PHP**
- **MySQL**
- **XAMPP** (for local development environment)
- **Composer** (PHP dependency manager)
- **Postman Collection**: Contains all API requests for easy testing and interaction with the API.

---

## Installation

### Prerequisites

Ensure you have the following installed on your machine:
- **XAMPP**: For running MySQL and Apache servers locally.
- **Composer**: For PHP dependency management.
- **PHP**: Required for running Laravel.
- **MySQL**: Database for the project
- **Postman**: Required for testing the requestes.



### Steps to Run the Project

1. Clone the Repository  
   ```bash
   git clone https://github.com/TukaHeba/Movie_Library.git
2. Navigate to the Project Directory
   ```bash
   cd ecommerce-management-system
3. Install Dependencies
   ```bash
   composer install
4. Create Environment File
   ```bash
   cp .env.example .env
   Update the .env file with your database configuration (MySQL credentials, database name, etc.).
5. Generate Application Key
    ```bash
    php artisan key:generate
6. Run Migrations
    ```bash
    php artisan migrate
7. Seed the Database
    ```bash
    php artisan db:seed
8. Run the Application
    ```bash
    php artisan serve

9. Laravel APIs Collection

This repository contains a collection of APIs designed for various functionalities, including:

- User Authentication: Endpoints for user registration, login, and password management.
- Data Management: APIs for creating, reading, updating, and deleting **Order**.
- Data Management: APIs for reading, showing  **Product**.
- Reporting: Endpoints for generating reports based on user data.
**link of collection**
https://gist.github.com/hadeel-suleiman/09a5c8035edb29fb0ad944b9fa4beabf


## Conclusion

This e-commerce management system provides a robust foundation for managing users, products, categories, and orders in a Laravel application. The use of Laravel Sanctum for API authentication ensures secure access to resources while allowing for easy management of roles and permissions.
