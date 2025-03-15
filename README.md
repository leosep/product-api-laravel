#   Laravel API CRUD Project

**Description:**

    This Laravel project provides a basic REST API with CRUD (Create, Read, Update, Delete) operations. It's designed to manage products, but it can be adapted for other data. It uses Laravel's Eloquent ORM, request validation, and API resources to provide a structured and efficient API.

**How to Use It:**

1.  **Installation:**

    * Clone the repository.
    * Install dependencies using `composer install`.
    * Set up your database in the `.env` file and run migrations with `php artisan migrate`.

    ```bash
    git clone <repository_url>
    cd your_project_directory
    composer install
    php artisan migrate
    ```
2.  **Running the API:**

    * Start the Laravel development server using `php artisan serve`.

    ```bash
    php artisan serve
    ```
3.  **API Endpoints:**

    * Use tools like Postman or curl to interact with the API endpoints.
    * The API provides standard CRUD operations for products:
        * `GET /api/products`: Get all products.
        * `POST /api/products`: Create a new product.
        * `GET /api/products/{id}`: Get a specific product.
        * `PUT/PATCH /api/products/{id}`: Update a product.
        * `DELETE /api/products/{id}`: Delete a product.

    ```
    # Get all products
    GET [http://127.0.0.1:8000/api/products](http://127.0.0.1:8000/api/products)

    # Create a product
    POST [http://127.0.0.1:8000/api/products](http://127.0.0.1:8000/api/products)
    Content-Type: application/json
    {
        "name": "Example Product",
        "description": "This is an example",
        "price": 29.99
    }

    # Get a single product
    GET [http://127.0.0.1:8000/api/products/1](http://127.0.0.1:8000/api/products/1)

    # Update a product
    PUT [http://127.0.0.1:8000/api/products/1](http://127.0.0.1:8000/api/products/1)
    Content-Type: application/json
    {
        "name": "Updated Product Name",
        "price": 39.99
    }

    # Delete a product
    DELETE [http://127.0.0.1:8000/api/products/1](http://127.0.0.1:8000/api/products/1)
    ```