# Alura's Knowing Doctrine ORM

Examples from [Alura's Knowing Doctrine ORM](https://cursos.alura.com.br/course/doctrine-conhecendo-orm-php) training.

## Requirements

- PHP 8.1
- Composer
- SQLite 3

## Run the project

1. Install the dependencies:
   ```
   composer install 
   ```

2. Create the database:
   ```
   php bin/doctrine.php orm:schema-tool:create
   ```

3. Run the scripts in the `tests/courses` and `tests/students` directories. Example, to create a student with a phone number:
   ```
   php tests/students/insert.php Daniel "(17) 98888-7777"
   ```