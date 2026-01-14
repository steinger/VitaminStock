# :pill:  VitaminStock

**VitaminStock** is an application for managing and monitoring vitamin and tablet inventories.

## Concept

The app helps users keep track of their vitamin or tablet stock.
Each daily intake recorded in the application automatically reduces the available inventory.

This provides a clear overview of:

- current stock levels
- daily intakes
- remaining tablets

In addition to vitamins, other tablets or supplements can also be managed.

## Features

- Management of different vitamins and tablets
- Daily intake tracking
- Automatic stock reduction
- Clear overview of inventory and intake history
- Multilingual support: **English and German**

## For Developers

VitaminStock is a **self-hosted** web application built with **Laravel**.

### Requirements

- PHP (compatible with the used Laravel version)
- Composer
- Database (e.g. MySQL, PostgreSQL, or SQLite)

### Installation (Standard Laravel Setup)

1. Download or clone the repository
2. Install dependencies:
 ```bash
composer install
 ```
3. Create and configure the  ```.env ``` file
4. Generate application key:
```bash
php artisan key:generate
```
5. Run database migrations:
```bash
php artisan migrate
```
6. Start the local development server:
```bash
php artisan serve
```
The application can be fully self-hosted.

## Language Support

The user interface is fully available in **English and German**.
