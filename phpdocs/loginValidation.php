<?php
    // Start a session
    session_start();

    // Create a database connection
    $dbConn = new mysqli("localhost", "root", "Admin1234$", "gtsspro_db");

    // Check if the connection is successful
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }

    // Function to sanitize input data
    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Initialize variables to store form data and error messages
    $username = $password = "";
    $usernameErr = $passwordErr = "";

    // Check if the form is submitted via POST
    if (isset($_SERVER["REQUEST_METHOD"]) &&$_SERVER["REQUEST_METHOD"] == 'POST') {

        // Validate and sanitize username
        if (empty($_POST["email"])) {
            $usernameErr = "Username is required";
            $showRegistrationButton = true;
        } else {
            $username = sanitizeInput($_POST["email"]);
        }

        // Validate and sanitize password
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
            $showRegistrationButton = true;
        } else {
            $password = $_POST["password"];
        }

        // If there are no errors, check user credentials in the database
        if (empty($usernameErr) && empty($passwordErr)) {
            if (empty($usernameErr) && empty($passwordErr)) {
                $sql = "
                SELECT 'admin_users' AS table_name, emailAddress, password, firstName FROM admin_users WHERE emailAddress = ?
                UNION
                SELECT 'customers' AS table_name, emailAddress, password, firstName FROM customers WHERE emailAddress = ?;
                ";
                $stmt = $dbConn->prepare($sql);
                $stmt->bind_param("ss", $username, $username);
                $stmt->execute();
                $result = $stmt->get_result();

            // If a user with the provided username is found
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();

                // Verify the provided password with the stored hashed password
                if (password_verify($password, $row["password"])) {
                    // Set session variables and redirect to the index page
                    $_SESSION['user_name'] = $row['firstName'];
                    header("Location: index.php");
                    exit();
                } else {
                    // Display an error if the password is incorrect
                    $passwordErr = "Incorrect password";
                }
            } else {
                // Display an error if the user is not found
                $usernameErr = "User not found";
                $showRegistrationButton = true;
            }
            $stmt->close();
        }
    }
    }
    // Close the database connection
    $dbConn->close();
