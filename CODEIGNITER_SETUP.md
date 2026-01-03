# CodeIgniter Framework Setup Guide

This project has been converted to use the CodeIgniter 4 framework.

## Project Structure

```
PorfilioWebsiteShubham/
├── app/
│   ├── Config/          # Configuration files
│   ├── Controllers/     # Controllers (Home, Projects, Experience)
│   ├── Models/          # Models (ProjectModel, SkillModel)
│   └── Views/           # View files
│       ├── home/
│       ├── projects/
│       ├── experience/
│       └── errors/
├── public/              # Public directory (web root)
│   ├── assets/          # CSS, JS, images
│   ├── index.php        # Entry point
│   ├── .htaccess        # URL rewriting
│   ├── projects.json    # Projects data
│   └── skills.json      # Skills data
├── system/              # CodeIgniter system files
├── writable/            # Writable directories (cache, logs, session, uploads)
└── .htaccess            # Root .htaccess
```

## Setup Instructions

### 1. Configure Base URL

Edit `app/Config/App.php` and update the `baseURL` to match your server:

```php
public string $baseURL = 'http://localhost/PorfilioWebsiteShubham/public/';
```

Or create a `.env` file in the root directory and set:

```
app.baseURL = 'http://localhost/PorfilioWebsiteShubham/public/'
```

### 2. Set Permissions (Linux/Mac)

Make sure the `writable` directory is writable:

```bash
chmod -R 755 writable
```

### 3. Web Server Configuration

#### Apache

The `.htaccess` files are already configured. Make sure `mod_rewrite` is enabled.

#### Nginx

You'll need to configure Nginx to point to the `public` directory and handle URL rewriting.

### 4. Access the Application

Access your application through the `public` directory:

```
http://localhost/PorfilioWebsiteShubham/public/
```

Or configure your web server to point the document root to the `public` directory.

## Routes

- `/` - Home page
- `/projects` - Projects page
- `/experience` - Experience page
- Any other route - 404 error page

## Controllers

- `Home` - Main homepage controller
- `Projects` - Projects listing page
- `Experience` - Experience page

## Models

- `ProjectModel` - Handles project data from JSON
- `SkillModel` - Handles skills data from JSON

## Views

All views are in `app/Views/`:
- `home/index.php` - Main homepage
- `projects/index.php` - Projects page
- `experience/index.php` - Experience page
- `errors/404.php` - 404 error page

## Assets

All assets (CSS, JS, images) are in `public/assets/`.

## Notes

- The project uses JSON files for data storage (projects.json, skills.json)
- All asset paths use CodeIgniter's `base_url()` helper
- The application follows MVC architecture
- Variable naming follows the project's coding standards (type prefixes)

