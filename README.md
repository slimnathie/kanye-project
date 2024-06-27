
## Pre-Req ##

* PHP v8.1+
* Composer
* Npm v16.15.0 (confirmed working - may work on other versions)

## Use Case Scenario: Kanye Quotes

1. The challenge will contain a few core features most applications have. That includes connecting to an API, basic MVC using Laravel, exposing an API, and finally, tests.
2. The API we want you to connect to is https://kanye.rest/
3. The application should have the following features
4. A rest API that shows 5 random Kayne West quotes (must)
5. There should be an endpoint to refresh the quotes and fetch the next 5 random quotes (must)
6. Authentication for these APIs should be done with an API token, not using any package. (must)
7. The above features are tested with Feature tests (must)
8. The above features are tested with Unit tests (nice to have)
9. Provide a README on how we can set up and test the application (must)
10. Implementation of API using Laravel Manager Design Pattern (Plus)
11. Making third-party API response quick by cache(Plus)



## SETUP

**Optional Pre Req (depending on your preferred testing stye):**
- Docker Desktop
- Laravel sail

1. clone the repo `gh repo clone slimnathie/kanye-quotes`
2. `cp .env.example .env`
3. `php artisan key:generate`
4. in .env set `APP_PORT=8080`
5. in .env set `API_TOKEN=your_secure_api_token_here`  ('put something easy like kanye')
6. `vendor/bin/sail up -d`  (launch app)
7. `vendor/bin/sail npm install && vendor/bin/sail npm run dev`

## Usage:
1. open a command terminal
2. cd kanye-project
3. `curl -H "api-token: kanye" http://localhost:8080/api/quotes`
4. After the first run it is cached for the example of 60 minutes.  To clear the cache run:  `sail artisan cache:clear`

**Test**

1. Feature Tests run:
  `php artisan test`


