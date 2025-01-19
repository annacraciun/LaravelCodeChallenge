# Laravel Code Challenge

This challenge is to assess a small range of your Laravel knowledge. We would like you to spend no more than 2 hours on this task. It's not a problem if you don't finish everything in the task. The goal is to get a clear view of how you think and work.

## The Challenge
The challenge will contain a few core features most applications have. That includes connecting to an API, basic MVC, exposing an API, and finally tests.

The API we want you to connect to is https://official-joke-api.appspot.com/jokes/programming/ten/

The application should have the following features

### Must haves
- A web page that shows 3 random jokes
- A button to refresh the jokes on the page
- An API route should be available to fetch the 3 jokes for the page
- Create tests for the application
- Provide a README on anything we need to set up and test the application

### Nice to haves
- Authentication for the page should be done with a password 
- The API route is secured with a token

### Notes
HTML/CSS/JS styling is not required at all. It doesn't matter how this application looks, only how it functions.

## Implementation Details

### Setup Instructions

Follow these steps to set up the application:

1. #### Clone the Repository
```bash
git clone https://github.com/annacraciun/LaravelCodeChallenge.git
cd LaravelCodeChallenge
```

2. #### Install Dependencies
Run the following command to install all required dependencies:
```bash
composer install
```
3. #### Set Up the Environment
- Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```

- Update the `.env` file with the application-specific settings. For example, set the `JOKE_API_URL`:
```bash
JOKE_API_URL=https://official-joke-api.appspot.com/jokes/programming/ten/
```

- Generate the application key:
```bash
php artisan key:generate
```

4. #### Serve the Application
Start the development server:
```bash
php artisan serve
```
The app will be accessible at `http://127.0.0.1:8000`.

### Testing Instructions
To run the tests for this application, follow these steps:

####  1. Create a Testing Environment

- Create a `.env.testing` file for the testing configuration:
```bash
cp .env .env.testing
```

- Update the `.env.testing` file with the testing configurations, such as:
```bash
APP_ENV=testing
APP_DEBUG=true
JOKE_API_URL=https://official-joke-api.appspot.com/jokes/programming/ten/
```

####  2. Run the Tests
```bash
php artisan test
```
