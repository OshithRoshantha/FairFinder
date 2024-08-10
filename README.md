# Bus Ticket Price Checker

This project is a simple web application that allows users to check bus ticket prices between two locations. The frontend is built with HTML, CSS, and JavaScript, while the backend is powered by PHP with a MySQL database managed via XAMPP.

## Installation

### Prerequisites

- XAMPP (or any local PHP server)
- A web browser

### Setup

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/OshithRoshantha/FairFinder.git
    ```

2. **Move the Project to the XAMPP Directory**:
   - Copy the project folder to the `htdocs` directory inside your XAMPP installation.

3. **Database Setup**:
   - Open phpMyAdmin via XAMPP.
   - Create a new database (e.g., `fairfinder`).
   - Import the provided SQL file (`normalbusdb.sql`) into your database.

4. **Configure the Database Connection**:
   - Open `config.php` in the project root.
   - Update the database credentials to match your setup.

5. **Run the Application**:
   - Start the Apache and MySQL services in XAMPP.
   - Navigate to `http://localhost/FairFinder/Pages/` in your web browser. 

## Usage

1. **Enter Locations**:
   - Type in the start and end locations in the provided input fields.

2. **View Results**:
   - The application will display the ticket price for the given route.
   - If no trips are available, a message will be shown.

## Contributing

If you would like to contribute to this project, feel free to submit a pull request or open an issue for discussion.

