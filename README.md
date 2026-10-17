# Tasks for Today Management System

A web-based task management application developed using **CodeIgniter 4**, PHP, and MySQL for the IT0049 – Web System Technologies Technical Summative Assessment 1.

## Features

- **Welcome Page (`/`)** – Displays tasks scheduled for the current date.
- **Task List (`/tasks`)** – Displays all tasks ordered by date.
- **Profile (`/profile`)** – Displays the demo user's information.
- **About (`/about`)** – Provides information about the developer.

## Technologies Used

- PHP 8.2
- CodeIgniter 4.7.5
- MySQL
- phpMyAdmin
- HTML
- Git and GitHub

## Requirements

- PHP 8.2 or a compatible version
- Composer
- MySQL or MariaDB
- XAMPP or another local PHP development environment

## Installation and Setup

### 1. Clone the Repository

```bash
git clone https://github.com/kuyagermi18/tsa1.git
cd tsa1
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Create the Database

1. Start Apache and MySQL using XAMPP.
2. Open phpMyAdmin at `http://localhost/phpmyadmin`.
3. Create a database named `tasks_today_db`.
4. Select the database and click the **Import** tab.
5. Choose `Database/tasks_today_db.sql` and import the file.

The database contains two tables:

- `tasks` – Stores task titles, statuses, dates, and creation timestamps.
- `users` – Stores the demo user's account information.

### 4. Configure the Environment

Copy the `env` template to `.env` if a `.env` file does not exist.

Update the following settings in `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = tasks_today_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

Adjust the port, username, and password if your local MySQL configuration differs.

### 5. Run the Application

From the project directory, execute:

```bash
php spark serve
```

Open the local URL displayed in the terminal. For example:

`http://localhost:8080`

If port 8080 is unavailable, CodeIgniter may use another port. Open the URL shown in your terminal.

## Project Structure

```text
tsa1/
├── app/
│   ├── Config/
│   ├── Controllers/
│   │   └── TasksController.php
│   ├── Database/
│   ├── Models/
│   │   ├── TaskModel.php
│   │   └── UserModel.php
│   └── Views/
│       ├── welcome_tasks.php
│       ├── task_list.php
│       ├── profile.php
│       └── about.php
├── Database/
│   └── tasks_today_db.sql
├── public/
├── tests/
├── writable/
├── composer.json
└── spark
```

## Developer

**Developer:** YOUR FULL NAME

**Course:** BSIT – Cybersecurity

**Subject:** IT0049 – Web System Technologies

## Repository

[GitHub Repository – tsa1](https://github.com/kuyagermi18/tsa1)
