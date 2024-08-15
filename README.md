# RESTFUL-API-LARAVEL

## Overview
This project is a RESTful API built with Laravel. The API allows CRUD operations (Create, Read, Update, Delete) on products, where each product has attributes like `name`, `description`, and `price`.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/BRIHI-HOUSSAME/RESTFUL-API-LARAVEL.git

2. Navigate to the project directory:
   ```bash
   cd RESTFUL-API-LARAVEL

3. Install dependencies::
   ```bash
   composer install
   
4. Set up your .env file:
   ```bash
   cp .env.example .env
   php artisan key:generate

5. Set up your database in the .env file and migrate the tables:
   ```bash
   php artisan migrate
   
6. Run the server:
   ```bash
   php artisan serve

## API Endpoints

### 1. Get All Products
**Endpoint**: `GET /api/products`

**Description**: Retrieves a list of all products.

### 2. Create a Product
**Endpoint**: `POST /api/products`

**Description**: Creates a new product.

### 3. Get a Single Product
**Endpoint**: `GET /api/products/{id}`

**Description**: Retrieves a single product by its ID.

### 4. Update a Product
**Endpoint**: `PUT /api/products/{id}`

**Description**: Updates an existing product's details.

### 5. Delete a Product
**Endpoint**: `DELETE /api/products/{id}`

**Description**: Deletes a product by its ID.

## Usage
You can test the API using tools like Postman or cURL,
This README file includes all steps for installing, setting up, and using the API, along with examples of API requests and responses.



