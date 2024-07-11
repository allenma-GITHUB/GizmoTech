<?php
    // Start a session
    session_start();

    // Set the email address based on the session variable or redirect to registration.php if empty
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
        header("Location: registration.php");
        exit();
    }
    $emailAddress = $_SESSION['email'];

    // Set the username based on the session variable or redirect to registration.php if empty
    if (!isset($_SESSION['firstname']) || empty($_SESSION['firstname'])) {
        header("Location: registration.php");
        exit();
    }
    $userName = $_SESSION['firstname'];

    // Define an array of featured items
    $featuredItems = array(
        "Electronics" => array("Phones", "Laptops", "Routers", "Switches"),
        "Top Sellers" => array("Saas", "IoT", "Cloud Services")
    );

    // Call the sendRegistrationEmail function and store the result
    $emailSent = sendRegistrationEmail($emailAddress, $userName, $featuredItems);

    // Display a JavaScript alert based on the email sending result
    echo '<script>';
    echo 'if (' . json_encode($emailSent) . ') {';
    echo '   alert("Email sent successfully");';
    echo '   window.location.href = "index.php";';
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
            </head>
            <body>
                <p>Hello $userName,</p>
                <p>Thank you for registering on Gizmo Tech Security Services! We are excited to have you on board.</p>
                <p>Featured Items:</p>
                <ul>";

        foreach ($featuredItems as $category => $items) {
            $message .= "<li><strong>$category:</strong><ul>";

            foreach ($items as $item) {
                $message .= "<li>$item</li>";
            }

            $message .= "</ul></li>";
        }

        $message .= "
                </ul>
                <p>Feel free to explore our website and discover amazing products.</p>
                <p>Best regards,<br>Gizmo Tech Security Services.com Team</p>
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

