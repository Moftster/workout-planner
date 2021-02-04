Workout Planner is a simple customisable application allowing you to plan, organise, track and monitor your workouts. 

To setup, please perform the following steps. 

Clone the repository with git clone

Copy .env.example file to .env and edit database credentials there

<!-- If Homestead -->
vagrant up

ssh into vagrant.

<!-- /If Homestead -->

php artisan migrate --seed

Run composer install

Run php artisan key:generate

Run php artisan migrate --seed 

Launch the main URL.


