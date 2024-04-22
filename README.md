# Time-Tracker
## This is a brief documentation of the Time-Tracker project. The project is structured as follows:

## Directories and Files
### Root Directory
- `.gitignore`: This file is used by Git to determine which files and directories to ignore when committing.
- `.htaccess`: This is a configuration file for use on web servers running the Apache Web Server software.
- `composer.json`: This file is used by Composer to manage project dependencies.
- `index.php`: This is the main entry point of the application.
- `package.json`: This file is used by npm to manage project dependencies.
- `README.md`: This file contains information about the project and instructions on how to use it.

### Scripting, Styling, Resources and Source Folders
- `resources/`: This directory contains resource files for the application.
- `scripts/`: This directory contains JavaScript files for the application.
- `styles/`: This directory contains CSS files for the application.
- `src/`: This directory contains the source code of the application.

## Web App
- `Config/`: This directory contains configuration files for the application.
- `Controllers/`: This directory contains the controller classes for the application.
- `Models/`: This directory contains the model classes for the application.
- `Routes/`: This directory contains the routing configuration for the application.
- `Views/`: This directory contains the view files for the application.
- `vendor/`: This directory contains all the PHP dependencies of the application that are managed by Composer.

## How to Use?
- Clone the repository to your local machine.
- Navigate to the project directory in your terminal.
- Run `composer install` to install the PHP dependencies.
- Run `npm install` to install the JavaScript dependencies.
- Start your local server and navigate to the project in your web browser.

## tests/ Directory
The tests/ directory is a crucial part of any software project. It contains all the test files for the application. These tests are used to verify the functionality of the code in the src/ directory and ensure that changes to the codebase do not break existing functionality.

## Structure
The tests/ directory is typically structured to mirror the src/ directory. For each file or module in src/, there should be a corresponding test file in tests/. For example, if there is a file src/Controllers/UserController.php, there should be a corresponding test file tests/Controllers/UserControllerTest.php.

## Test Files
Test files contain test cases. Each test case is a function that tests a specific piece of functionality in the codebase. Test cases should be written to cover all possible edge cases to ensure the robustness of the code.

## Running Tests
To run the tests, you typically use a test runner. For PHP projects, this is often PHPUnit. You can run the tests with the following command in your terminal:
`./vendor/bin/phpunit`
This command should be run from the root directory of your project. It will execute all the test cases in the tests/ directory.

Remember, a well-tested application is a reliable application. Happy testing!

# Time-Tracker
# Time-Tracker
