# Bookstore impotant command
1. Install dependency
`composer i`
2. Run the application:
`php artisan serve`
3. Create a migration for the books table:
 `php artisan make:migration create_books_table`
4. Run the migrations:
`php artisan migrate create_books_table`
5. Create a model and factory for Book:
 `php artisan make:model Book -f`
6. Create a model for Book:
`php artisan make:controller BookController -r`
7. Seed the database:
` php artisan db:seed`

