## <p aligin="center">Instruction for installing: </p>
    composer install
    edit .env
    chmod -R 775 bootstrap/cache
    chmod -R 777 storage
    php artisan key:generate
    npm install
    npm run dev or npm run watch
    php artisan serve