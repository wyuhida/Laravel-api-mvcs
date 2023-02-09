#!/bin/sh
#!chmod u+x YourScript.sh

echo "\nResetting ... \n"

echo "\nClearing Cache ... \n"

php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\nDropping/creating database"
php artisa migrate:fresh

echo "\nDone :)\n"