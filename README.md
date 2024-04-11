---

# Signup Project Using OOP in PHP

This project demonstrates a signup system implemented in PHP using Object-Oriented Programming (OOP) principles. Users can register for an account, providing their name, email, and password. The project showcases how to structure and implement a basic signup functionality in PHP with OOP.

## Features

- **User Registration**: Allows users to sign up by providing their name, email, and password.
- **Data Validation**: Validates user inputs to ensure they meet certain criteria (e.g., valid email format, strong password requirements).
- **Database Interaction**: Stores user information securely in a MySQL database.
- **Password Hashing**: Utilizes password hashing techniques to securely store user passwords.
- **Error Handling**: Implements error handling to provide meaningful feedback to users in case of invalid inputs or system errors.

## Project Structure

The project is organized as follows:

- **`index.php`**: Entry point of the application. Displays the signup form and handles form submissions.
- **`signup.inc.php`**: Class definition for the `User` object, which encapsulates user-related functionalities (e.g., registration, validation).
- **`Dbh.classes.php`**: Contains the `Database` class responsible for database connections and queries.


## Installation and Setup

To run this project locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/tabpaddy/signup-using-oop/repository.git
   ```

2. **Set Up Database**:
   - Create a MySQL database.
   - Import the `database.sql` file to set up the necessary table (`registration`).

3. **Configure Database**:
   - Update the `dbh.classes.php` file with your database credentials.

4. **Run the Application**:
   - Start your local server (e.g., Apache).
   - Open `index.php` in your web browser.

## Usage

1. Access the application through your web browser.
2. Fill out the signup form with your details (name, email, password).
3. Submit the form.
4. You should receive a success message upon successful registration or error messages if there are validation issues.

## Dependencies

This project requires:

- PHP 7.0+
- MySQL
- A web server (Apache)

## Contributing

Contributions are welcome! If you have ideas for improvements or new features, feel free to submit issues and pull requests.

## License

This project is licensed under the [MIT License](LICENSE).

---
