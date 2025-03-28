# PDO_CRUD_APPLET

This is a simple CRUD app I made for the Sessions Lab (Practical Work Block 2).  
It’s built with PHP and MySQL, and uses PDO for database stuff.

The idea was to follow the tutorial we were given and build an app that can:
Create users
Read/search users by location
Update user info
Delete users

## How it works:

- I used prepared statements to keep things secure
- There’s a form for each part (create, read, update, delete)
- It connects to the database using PDO (`DBconnect.php` + `config.php`)
- `install.php` sets up the database using `init.sql`
