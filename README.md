<!-- Preview Image -->

![Preview](https://github.com/alnahian2003/generic/assets/61485238/f8aac6af-1a4d-46e6-834b-3fa19b23d138)

# Firoza — Your Modern Laravel Blog Application

Firoza is a blog application featuring articles. Visitors can filter posts by category and search through them using the prominent search bar in the header. This application was created for the students of the Laravel 11 Crash Course.

[Get the Tailwindcss Template](https://github.com/alnahian2003/generic)

## Features

-   Modern Responsive UI
-   Simple Blog Structure
-   Categorized Posts: Filter posts by categories.
-   Search Posts by Title or Body Text
-   And... what else? 🤔

## Installation

Please check the [Laravel Official Documentation](https://laravel.com/docs/master/installation) for server requirements before you start.

First, clone this repository:

```bash
git clone https://github.com/alnahian2003/firoza.git
```

Switch to the repository folder:

```bash
cd firoza
```

Install all dependencies using Composer and npm:

```bash
composer install
```

```bash
npm install
```

Copy the `.env.example` file and make the required configuration changes in the `.env` file:

```bash
cp .env.example .env
```

Generate a new application key:

```bash
php artisan key:generate
```

Run the database migrations (set the database connection in `.env` before migrating):

```bash
php artisan migrate
```

Start the local development server:

```bash
php artisan serve
```

Start Vite for bundling the assets or Hot Module Reload (required):

```bash
npm run dev
```

You can now access the server at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

### TL;DR

All the command list:

```bash
git clone https://github.com/alnahian2003/firoza.git
```

```bash
cd firoza
```

```bash
composer install
```

```bash
npm install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

```bash
php artisan serve
```

```bash
npm run dev
```

## Database Seeding

Populate the database with seed data that includes relationships. This can help you quickly get started and explore the project inside out.

Run the database seeder once to get:

-   10 Categories
-   30 Fake Posts
-   1 Admin User

```bash
php artisan db:seed
```

Next time you run the `db:seed` artisan command, try running it by specifying the seeder class name:

```bash
php artisan db:seed --class=CategorySeeder,PostSeeder
```

Note: It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command:

```bash
php artisan migrate:refresh
```

## Tech Stack

**Client Side:** TailwindCSS

**Server Side:** PHP, Laravel

## Support

For support, [contact me](https://x.com/alnahian2003) or open an issue.
