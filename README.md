# data-analys
It's university project. This project needed for download COVID-19 data automatically
## Installation

    git clone https://github.com/ondrop/data-analys.git
    
Set config in `.env` file or create `.env.local` file and set there.

Install Composer dependencies:

    composer install

Create database:

    php bin/console doctrine:database:create --connection=default --if-not-exists
    
Launch migrations:

    php bin/console doctrine:migrations:migrate --allow-no-migration -n
    
## Usage

Run this command to download and save global COVID-19 data:

    php bin/console app:covid-19:daily-report:download
    
Then run this command to download and save US COVID-19 data

    php bin/console app:covid-19:daily-report-us:download
    
