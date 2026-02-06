## Internal OOP PHP starter kit for building web applications with a clean MVC architecture.

## Features

- **Custom Router**: Simple and lightweight routing system
- **MVC Architecture**: Controllers, Models, Services, and Repositories
- **Database Support**: Built-in database connection handling
- **Middleware**: Request middleware support
- **View Rendering**: Helper functions for template rendering
- **PSR-4 Autoloading**: Standard PHP autoloading via Composer

## Directory Structure

```
root/
├── app/
│   ├── Controllers/    # Application controllers
│   ├── Core/          # Core framework classes (Router, Database)
│   ├── Middleware/    # Request middleware
│   ├── Models/        # Data models
│   ├── Repositories/  # Data repositories
│   ├── Request/       # Request validators
│   ├── Services/      # Business logic services
│   └── helpers.php    # Global helper functions
├── config/            # Configuration files
├── public/            # Public web root
│   └── index.php      # Application entry point
├── resources/
│   └── views/         # View templates
├── routes/            # Route definitions
│   ├── web.php        # Web routes
│   └── api.php        # API routes
└── storage/           # Application storage
```

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```
3. Configure environment variables:
   ```bash
   cp .env.example .env
   ```
4. Set up your web server to point to the `public/` directory

## Usage

### Defining Routes

Add routes in `routes/web.php`:

```php
<?php

$router->get('/', 'HomeController@index');
$router->get('/about', 'HomeController@about');
```

### Creating Controllers

Create a controller in `app/Controllers/`:

```php
<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        view('home', ['title' => 'Welcome']);
    }
}
```

### Using Views

View files are located in `resources/views/`. Use the `view()` helper function:

```php
view('home', ['title' => 'Welcome']);
```

This will load `resources/views/home.php` with the provided data.

### Helper Functions

- `view($path, $data = [])`: Render a view template
- `current_path()`: Get the current request path
- `active($path)`: Check if current path matches

## Requirements

- PHP 7.4 or higher
- Composer
- Web server (Apache/Nginx)

## License

MIT License

Copyright (c) 2026 Marcielo Abalos

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
