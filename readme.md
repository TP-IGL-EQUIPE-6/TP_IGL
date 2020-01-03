
TP IGL

-To run the application in a server locally : 
you need to have xampp, download it via 'https://www.apachefriends.org/fr/download.html' 
Create a database locally named tp_igl 
make sure you have Composer installed on your machine for that, Run composer install or php composer.phar install 
Run php artisan key:generate 
Run php artisan migrate 
Run php artisan serve

-To run selenium test you need to run the following cmd : 
selenium-side-runner \path\to\your-project\AjouterEtudiantSeleniumTest.side

-To run unit tests you need to run the following cmd : vendor/bin/phpunit

-To run the application using Docker and docker-compose: 
Run the command "docker-compose up" in the rout folder
That's it. (Docker will install all the images and the dependencies needed and set everything up for you)
