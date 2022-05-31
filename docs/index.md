
## _Plugin paging responsive for dataTables_

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Paging responsive for dataTables (use on admin page or custom page).

- Light (14.1 KB) and easy to use
- Good compatibility with dataTables libraries
- ✨Magic ✨

## Features

- Responsive on Desktop, Tablet, Mobile screen (width >= 320px)
- Compatible with paging adapter of dataTables API
- Compatible with show, filter, sort of dataTables
- No change row data on dataTables when orientation property equal to either "portrait" or "landscape" 
- Support i18n dataTables
- Search and validate pagination on mobile
- Cached languages, use select2 for layout
- Show multiple dataTables on same page 

## Tech

DataTables paging responsive uses a number of open source projects to work properly:

- [jQuery] - Javascript library!
- [select2] - Javascript for select
- [dataTables] - Javascript for tables.
- [Bootstrap] - UI boilerplate for modern web apps
- [Laravel] - PHP Framework for the backend

## Installation

Require [PHP], [Composer] for backend  
Go to working directory and run commands.

```sh
cd dataTables-paging-responsive
cp .env.example .env
composer install
php artisan key:generate
php artisan serve
```

Go to http://127.0.0.1:8000  
Enjoy it!

## Test

```sh
karma test
```

## License

Copyright © 2022 Tiger

   [jQuery]: <http://jquery.com>
   [select2]: <https://select2.org>
   [dataTables]: <https://datatables.net>
   [Bootstrap]: <https://getbootstrap.com>
   [PHP]: <https://www.php.net>
   [Composer]: <https://getcomposer.org>
   [Laravel]: <https://laravel.com/>
