# Gym Final Website

Gym management website with HTML, CSS, JavaScript frontend, PHP backend, and SQL persistence.

## Tech Stack

- HTML
- CSS
- Vanilla JavaScript
- PHP
- PDO
- SQL / MySQL

## Setup

1. Make sure PHP is installed and available in your terminal.
2. Create a MySQL database and user.
3. Import [`database.sql`](./database.sql) into your MySQL database, or let the PHP API create the tables automatically on first run.
4. Copy [.env.example](./.env.example) to your local environment and set your database values.
5. Confirm `pdo_mysql` is enabled in PHP.

## Environment Variables

- `DB_HOST`
- `DB_PORT`
- `DB_NAME`
- `DB_USER`
- `DB_PASSWORD`
- `DB_CHARSET`

## Run

### PowerShell

```powershell
npm run start:mysql
```

### Direct PHP

```powershell
php -S localhost:4000 router.php
```

## Notes

- The UI is built with HTML, CSS, and JavaScript.
- The backend is built with PHP and PDO.
- Data is stored in SQL tables through MySQL.
- Selected browser `localStorage` keys are synced with backend storage.
