## Litbang Web Application

Web application for submitting letters with AES encryption in the form of QR Code. Developing using [Laravel 9](https://laravel.com/) Framework

### Installation

-   Clone repository to local computer
-   Update package composer
    ```
    composer update
    ```
-   Copy .env.example file to .env
    ```
    cp .env.example .env
    ```
-   Run this command to install mysql image
    ```
    php artisan sail:install
    select->0 or mysql
    ``` 
-    Run sail with the following command
    ```
    ./vendor/bin/sail up -d
    ```
-   Generate key to .env file
    ```
    ./vendor/bin/sail artisan key:generate
    ```
-   Migrate database
    ```
    ./vendor/bin/sail artisan migrate:fresh --seed
    ```

### Team

-   [Ifanu Antoni](https://github.com/ifanuAntoni/) - Frontend Engineer
-   [Aufi Fillah](https://github.com/fillahaufi/) - Frontend Engineer
-   [Ahmad Lamaul Farid](https://github.com/faridlamaul/) - Backend Engineer
