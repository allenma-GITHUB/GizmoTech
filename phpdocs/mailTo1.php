<?php
    // Start a session
    session_start();

    // Set the email address based on the session variable or redirect to registration.php if empty
    if (!isset($_SESSION['userEmail']) || empty($_SESSION['userEmail'])) {
        header("Location: registration.php");
        exit();
    }
    $emailAddress = $_SESSION['userEmail'];


    // Set the username based on the session variable or redirect to registration.php if empty
    if (!isset($_SESSION['userFirstName']) || empty($_SESSION['userFirstName'])) {
        header("Location: registration.php");
        exit();
    }
    $userName = $_SESSION['userFirstName'];

    // Define an array of featured items
    $featuredItems = array(
        "Electronics" => array(
            array(
                "name" => "Phone",
                "link" => "products.php",
                "image" => "http://localhost/GTSS-econ/img/emailpics/smartphone.jpg"
            ),
            array(
                "name" => "Laptop",
                "link" => "products.php",
                "image" => "http://localhost/GTSS-econ/img/emailpics/gaming-laptop.jpg"
            ),
            array(
                "name" => "Router",
                "link" => "products.php",
                "image" => "http://localhost/GTSS-econ/img/emailpics/router.jpg"
            ),
            array(
                "name" => "Switch",
                "link" => "products.php",
                "image" => "http://localhost/GTSS-econ/img/emailpics/unifi_switch.jpg"
            )
        ),
        "Top Sellers" => array("Saas", "IoT", "Cloud Services")
    );

    // Call the sendRegistrationEmail function and store the result
    $emailSent = sendRegistrationEmail($emailAddress, $userName, $featuredItems);

    // Display a JavaScript alert based on the email sending result
    echo '<script>';
    echo 'if (' . json_encode($emailSent) . ') {';
    echo '   alert("Email sent successfully");';
    //echo '   window.location.href = "../index.php";';
    echo '} else {';
    echo '   alert("Email sending failed");';
    echo '}';
    echo '</script>';

    // Function to send a registration email
    function sendRegistrationEmail($to, $userName, $featuredItems) {
        // Define the email subject
        $subject = "Welcome to Gizmo Tech Security Services!";

        // Define email headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: gizmotechpro@gmail.com";

        // Construct the email message
        $message = "
            <html>
            <head>
                <title>Welcome to Gizmo Tech Security Services!</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 0;
                    }
                    .email-container {
                        background-color: #ffffff;
                        padding: 20px;
                        margin: 20px auto;
                        border-radius: 10px;
                        width: 80%;
                        max-width: 600px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
                    .header {
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px;
                        text-align: center;
                        border-radius: 10px 10px 0 0;
                    }
                    .content p {
                        margin: 0 0 15px;
                    }
                    .featured-items ul {
                        list-style-type: none;
                        padding: 0;
                    }
                    .featured-items li {
                        margin: 10px 0;
                    }
                    .featured-items img {
                        max-width: 200px;
                        display: block;
                        margin: 10px 0;
                    }
                    .footer {
                        margin-top: 20px;
                        text-align: center;
                        font-size: 12px;
                        color: #777;
                    }
                </style>
            </head>
            <body>
                <div class='email-container'>
                    <div class='header'>
                        <h1>Welcome to Gizmo Tech Security Services!</h1>
                    </div>
                    <div class='content'>
                        <p>Hello " . htmlspecialchars($userName) . ",</p>
                        <p>Thank you for registering on Gizmo Tech Security Services! We are excited to have you on board.</p>
                        <p>Featured Items:</p>
                        <div class='featured-items'>
                            <ul>";

            foreach ($featuredItems as $category => $items) {
                $message .= "<li><strong>" . htmlspecialchars($category) . ":</strong><ul>";

                if (is_array($items)) {
                    foreach ($items as $item) {
                        if (is_array($item)) {
                            $itemName = htmlspecialchars($item['name']);
                            $itemLink = htmlspecialchars($item['link']);
                            $itemImage = htmlspecialchars($item['image']);
                            echo $itemImage;
                            $message .= "
                            <li>
                                <a href='$itemLink'>
                                    <img src='$itemImage' alt='$itemName'>
                                    <br>$itemName
                                </a>
                            </li>";
                        } else {
                            // Handle non-array items if needed
                            $itemName = htmlspecialchars($item);
                            $message .= "<li>$itemName</li>";
                        }
                    }
                } else {
                    // Handle non-array items if needed
                    $itemName = htmlspecialchars($items);
                    $message .= "<li>$itemName</li>";
                }

                $message .= "</ul></li>";
            }

        $message .= "
                        </ul>
                    </div>
                    <p>Feel free to explore our website and discover amazing products.</p>
                    <p>Best regards,<br>Gizmo Tech Security Services Team</p>
                </div>
                <div class='footer'>
                    <p>&copy; " . date('Y') . " Gizmo Tech Security Services. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>";

        // Attempt to send the email and return the result
        if (mail($to, $subject, $message, $headers)) {
            error_log("Email sent to $to, Subject: $subject");
            return true;
        } else {
            error_log("Email sending failed for $to, Subject: $subject");
            return false;
        }
    }

