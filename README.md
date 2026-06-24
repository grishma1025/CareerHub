# CareerHub - Job Portal System

## Project Description

CareerHub is a web-based job portal developed using PHP and MySQL. The system provides separate modules for users and administrators to manage jobs, applications, and recruitment activities.

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* JavaScript
* Bootstrap
* XAMPP Server

## Software Requirements

Install the following software:

* XAMPP Control Panel (Apache and MySQL)
* Web Browser (Chrome recommended)
* Visual Studio Code (optional)

## Project Setup

1. Copy the project folder to:

```text
C:\xampp\htdocs\
```

2. Start the following services from XAMPP:

* Apache
* MySQL

## Database Setup

1. Open:

```text
http://localhost/phpmyadmin
```

2. Create a database named:

```text
db_careerhub
```

3. Import the file:

```text
db_careerhub.sql
```

4. Check database connection file:

```text
config.php
```

Example:

```php
$conn = mysqli_connect("localhost","root","","db_careerhub");
```

If MySQL is running on another port (for example 3307), use:

```php
$conn = mysqli_connect("localhost","root","","db_careerhub",3307);
```

## Running the Project

Open browser and run:

User Module:

```text
http://localhost/CareerHub/CareerHub/user/
```

Admin Module:

```text
http://localhost/CareerHub/CareerHub/admin/
```

## Notes

* Ensure Apache and MySQL services are running.
* If MySQL port changes, update the port number in `config.php`.
* The project was developed and tested using XAMPP.

## Developed By

Grishma Bhuva
BCA/MCA Student Project
