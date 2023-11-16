## Application to manage concerts

This application allows users to manage the creation, view, update and deletion of live concerts as well as artists. The backend is programmed with Laravel and the frontend
is programmed with React. It uses a MySQL database and the version control is followed with Git.

## How to open project (not tested, info from "https://medium.com/@sidickallalade/how-to-install-laravel-project-you-cloned-from-git-3ad9a13ee2f4")

1 - Download the files from github
2 - Access the folder with the project name : <sub> cd projectname </sub>
3 - Install the project dependencies: <sub> compose install </sub>
4 - Install NPM dependencies (optional) : <sub> npm intall<sub>

## Seeding the database

Recreate all the tables: <sub> php artisan migrate </sub>

There should be a database named laravel_concert_api in the mysql admin control panel.
In the cmd or bash terminal write the command <sub>php artisan migrate:fresh --seed</sub>.
