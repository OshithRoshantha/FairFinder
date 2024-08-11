# Bus Ticket Price Checker

This project is a simple web application that allows users to check bus ticket prices between two locations. The frontend is built with HTML, CSS, and JavaScript, while the backend is powered by PHP with a MySQL database managed via XAMPP.

## Prerequisites

- XAMPP (or any local PHP server)
- A web browser

## Setup

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/OshithRoshantha/FairFinder.git
    ```

2. **Move the Project to the XAMPP Directory**:
   - Copy the project folder to the `htdocs` directory inside your XAMPP installation.

3. **Database Setup**:
   - Open phpMyAdmin via XAMPP.
   - Create a new database (`fairfinder`).

4. **Import the Table Structure**:
   - You can use the provided `.sql` file to create the required table structure and populate it with data:
     - In phpMyAdmin, select your database (`fairfinder`).
     - Go to the **Import** tab.
     - Choose the `SQL/normalbusdb.sql` file located in the project directory.
     - Click **Go** to execute the SQL script, which will create the table and populate it with data.

5. **Configure the Database Connection**:
   - Open `db_config.php` in the project root.
   - Update the database credentials to match your setup.

6. **Run the Application**:
   - Start the Apache and MySQL services in XAMPP.
   - Navigate to `http://localhost/FairFinder/Pages/` in your web browser.

## Usage

1. **Enter Locations**:
   - Type in the start and end locations in the provided input fields.

2. **View Results**:
   - The application will display the ticket price for the given route.

