# PHP Starter Template

This is a custom PHP starter template designed with a clean and minimal MVC (Model-View-Controller) architecture. It provides a lightweight structure for building scalable PHP applications using only core PHP, HTML, and CSS—without relying on any external frameworks or packages.

## 🔧 Folder Structure

- `app/`  
  Contains the core logic of the application.
  - `controllers/`: Application controllers that handle requests.
  - `core/`: Core classes such as the router and base controller.

- `views/`  
  Contains HTML templates (views) that are rendered in response to web requests.

- `public/`  
  The public-facing directory. It includes the front controller (`index.php`), static assets like CSS, JavaScript, and images.

- `routes/`  
  Defines the routes for the application.
  - `web.php`: Routes for serving web pages.
  - `api.php`: Routes for handling API requests and returning JSON.

- `database/`  
  Contains the database connection configuration.

- `config/`  
  Application-wide configuration settings.

## ⚙️ How to Run

You have two options to run the application:

### Option 1: Using a local web server (like XAMPP or WAMP)
1. Place the project folder in your local server’s directory (`htdocs` or `www`).
2. Start your local server.
3. Open your browser and navigate to: <a href="http://localhost/php-starter/public">http://localhost/php-starter/public</a>

### Option 2: Using PHP’s built-in server
1. Open a terminal and navigate to the `public/` directory of the project.
2. Run the following command: `php -S 127.0.0.1:8000`
3. Then visit: <a href="http://127.0.0.1:8000">http://127.0.0.1:8000</a>

## ✅ Features

- Clean and modular MVC structure
- Separate routing files for web and API endpoints
- Lightweight and dependency-free
- Easy to extend for dynamic websites or API-based applications

## 💬 Example API Usage

You can test the API by visiting:<a href="http://localhost/php-starter/public/api/hello">http://localhost/php-starter/public/api/hello</a>  

Or if using the built-in server: <a href="http://127.0.0.1:8000/api/hello">http://127.0.0.1:8000/api/hello</a>


It will return a JSON response.

## 📁 License

This template is open for personal and educational use. You are free to modify and extend it to suit your project needs.
