

**Pre-Requisites:**
composer
npm

**Optional:**
Docker Desktop
Laravel sail

1. clone the repo
2. cp .env.example .env
   php artisan key:generate
3. in .env set APP_PORT=8080
4. in .env set API_TOKEN=your_secure_api_token_here  ('put something easy like kanye')
5. vendor/bin/sail up -d  (launch app)
6. vendor/bin/sail npm install && vendor/bin/sail npm run dev

**Results:**
1. open a command terminal
2. cd <code directory>
3. curl -H "api-token: kanye" http://localhost:8080/api/quotes
4. After the first run it is cached for the example of 60 minutes.  To clear the cache run:  sail artisan cache:clear

**Test**

1. Feature Tests run:
   ./vendor/bin/phpunit


