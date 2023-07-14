<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel Blog

Laravel Blog is a n open source Blog management based on Laravel and Filament. This repository using [Filametphp](https://filamentphp.com/).

## Table of Contents

-   [Features](#features)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Contributing](#contributing)
-   [License](#license)

## Features

-   User authentication (registration, login, logout)
-   Create, edit, and delete blog posts
-   Categories and tags for organizing posts
-   User roles (admin, author, reader) (comming soon)
-   Responsive design

## Installation

1. Clone the repository:

    ```bash
    git clone git@github.com:ruswan/blog-laravel.git
    ```

2. Install the dependencies:

    ```bash
    cd blog-laravel
    composer install
    ```

3. Rename the `.env.example` file to `.env` and set your environment variables, including the database configuration.

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Run the database migrations:

    ```bash
    php artisan migrate
    ```

6. Optionally, you can seed the database with some sample data:

    ```bash
    php artisan db:seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Visit `http://localhost:8000` in your web browser to access the application.

## Usage

-   Register a new user or use the default admin account (if seeded).
-   Explore the blog, read posts, and leave comments.
-   Log in as an admin or author to create and manage posts.

## Contributing

Contributions are welcome! If you find a bug or have a suggestion for improvement, please create an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

```

Feel free to modify and customize the template according to your specific project requirements. Remember to replace "your-username" with your actual GitHub username and make any necessary adjustments to the instructions, such as port numbers or additional configuration steps.

Once you've created your README file, make sure to save it as `README.md` in the root directory of your GitHub repository.

## Screnshoot

![](./art/Screenshot1.png)

![](./art/Screenshot2.png)

![](./art/Screenshot3.png)

![](./art/Screenshot4.png)
```
