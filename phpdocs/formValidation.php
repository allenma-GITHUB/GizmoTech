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
    $firstName = $lastName = $address = $emailAddress = $phone = $password = $confirmPassword = "";
    $firstNameErr = $lastNameErr = $addressErr = $emailAddressErr = $phoneErr = $passwordErr = $confirmPasswordErr = "";

    // Check if the form is submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize first name
        if (empty($_POST["firstname"])) {
            $firstNameErr = "First Name is required";
        } else {
            $firstName = sanitizeInput($_POST["firstname"]);
        }

        // Validate and sanitize last name
        if (empty($_POST["lastname"])) {
            $lastNameErr = "Last Name is required";
        } else {
            $lastName = sanitizeInput($_POST["lastname"]);
        }

        // Validate and sanitize address
        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = sanitizeInput($_POST["address"]);
        }

        // Validate and sanitize email address
        if (empty($_POST["email"])) {
            $emailAddressErr = "Email Address is required";
        } else {
            $emailAddress = sanitizeInput($_POST["email"]);
            if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
                $emailAddressErr = "Invalid email format";
            }
        }

        // Validate and sanitize phone number
        if (empty($_POST["phonenumber"])) {
            $phoneErr = "Phone Number is required";
        } else {
            $phone = sanitizeInput($_POST["phonenumber"]);
        }

        // Validate and sanitize password
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = $_POST["password"];
        }

        // Validate and confirm password
        if (empty($_POST["confirmpassword"])) {
            $confirmPasswordErr = "Please confirm the password";
        } else {
            $confirmPassword = $_POST["confirmpassword"];
            if ($password !== $confirmPassword) {
                $confirmPasswordErr = "Passwords do not match";
            }
        }

        // If there are no errors, hash the password and insert user data into the database
        if (empty($firstNameErr) && empty($lastNameErr) && empty($addressErr) && empty($emailAddressErr) && empty($phoneErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // SQL query to insert user data into the 'customers' table
            $sql = "INSERT INTO customers (emailAddress, firstName, lastName, address, phoneNumber, passWord) VALUES ('$emailAddress', '$firstName', '$lastName', '$address', '$phone', '$hashedPassword')";

            // Execute the SQL query
            if ($dbConn->query($sql) === TRUE) {
                // Set a session variable indicating successful registration and redirect to login page
                $_SESSION['registration_success'] = true;
                $_SESSION['userEmail'] = $emailAddress;
                $_SESSION['userFirstName'] = $firstName;
                header("Location: phpdocs/mailTo.php");
                exit();
            } else {
                // Display an error message if the SQL query fails
                error_log("Error: " . $sql . " - " . $dbConn->error);
                echo "Error: " . $sql . "<br>" . $dbConn->error;
            }
        }
    }

    // Close the database connection
    $dbConn->close();
