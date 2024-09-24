<p> Ticket Management </p>

## About Project

This is a very simple project to management support tickets.

The system is compound by the follow entitites:
- Tickets (main entity)
- Categories
- Situations (can be read like "status")

Ticket and Categories have the four CRUD operations.

Situations are hard coded, with the follow possible values:
- Novo -> When ticket is fresh new.
- Pendente -> When ticket are is process to be resolved.
- Resolvido -> When ticket is already resolved.

The EDR diagram representation of the relation between system entities:

![EDR representation of system entities relation](https://github.com/GabrielDantasDs/ticket-management/blob/master/public/uml.png)

** Requirements to build an run **
- Laravel 11.9 >
- PHP 8.2 >
- Mysql 8.0

** Development Machine specs ** 
- Intel i5 7th gen
- 20GB of RAM memory
- 500GB sdd storage
- Linux Ubuntu 22.04.4 LTS
- 64 bits arc

** Steps to build and run Project **
In a linux/MacOs terminal or WSL2 in windows: 
 1. Run: composer install
 2. Setup your env, define the database credentials
 3. Run DB migrations: php artisan migrate
 4. Run DB seeder: php artisan db:seed, this is will seed your database with pre defined records in Situations table
 5. Set up your server, run: php artisan serve

** Before Start **
1. In specificantion documents i dont find informations about possible categories, thenfore when you start system there none, you will need create your owns before create a ticket.

** About Development **
- This project use blade for frontend, so is basically html and css.
- Using OOP here is not really necessary, Eloquent models can handle with almost all operations, but i try include some concepts of OOP when manipulate Tickets objects.
  
