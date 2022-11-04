<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation and Setup Instructions

### Step 1: Clone repository

Clone down this repository. 

### Step 2: Install composer

You will need `composer` installed globally on your machine. if not installed then download from below url.

Reference:
```
https://getcomposer.org/download
```

### Step 3: Run composer install

Open Terminal on your project root directory and use following command

```bash
composer install
```

Now laravel and its dependencies are installed via composer.

### Step 3: Create MySQL database

Create a database in MySQL. Keep noted database name, user and password.

### Step 4: Update the Environment Configurations

Next you need to make a copy of the `.env.example` file and rename it to `.env` inside your project root.

Now open the .env file and update the necessary configuration changes such as application name and database information.

```dosini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<DATABASE_NAME>
DB_USERNAME=<DATABASE_USERNAME>
DB_PASSWORD=<DATABASE_PASSWORD>
```

#### IMPORTANT!

Set `APP_DEBUG` to `false` and `APP_ENV` to `production`, and update the `APP_NAME` and `APP_URL` accordingly. If you leave `APP_DEBUG` as true, in the event of errors you’ll be displaying sensitive debug information to the world:

```dosini
APP_NAME="Project name"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=http://your-app.com
```

### Step 5: Application Key

Run the following command to generate your app key:

```
php artisan key:generate
```

### Step 6: Execute Database Migration and Seeder

Running Migrations and Seeds:

```
php artisan migrate --seed
```

### Step 7: Start Local Development Server

Then start your server:

```
php artisan serve
```


## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
