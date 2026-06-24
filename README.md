# Inventory Management System

## Overview

This application was developed as part of a technical assessment. It is a web-based **Inventory Management System** built using **Laravel Framework** and **MySQL Database**.

## Features

### Authentication

- User Login
- Session-based Authentication

### Category Management

- Create Category
- View Category List
- Update Category
- Delete Category

### Product Management

- Create Product
- View Product List
- Update Product
- Delete Product
- Product belongs to a Category

### Transaction Management

- Create Transaction
- View Transaction List
- Delete Transaction
- Automatic Stock Deduction
- Automatic Total Price Calculation

## Technology Stack

- PHP 8.x
- Laravel 12
- MySQL
- Bootstrap 5

## Installation Guide

### 1. Clone Project

```bash
git clone https://github.com/loveg0od/inventory-management-system.git
cd inventory-management-system
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Create Environment File

```bash
cp .env.example .env
```

### 4. Configure Database

Update the following section inside `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_system
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migration

```bash
php artisan migrate
```

### 7. Seed Initial User

```bash
php artisan db:seed
```

### 8. Start Application

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

## Default Login

| Email          | Password    |
| -------------- | ----------- |
| admin@test.com | password123 |

## Database Structure

### Categories

- id
- name
- description

### Products

- id
- category_id
- name
- stock
- price
- description

### Transactions

- id
- product_id
- quantity
- total_price

## Business Logic

### Product

A product belongs to a category.

### Transaction

When a transaction is created:

- Stock is automatically reduced.
- Total price is automatically calculated.

When a transaction is deleted:

- Stock is automatically restored.

## Author

**Rivandi**
