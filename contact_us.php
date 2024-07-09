<?php
    $title = "Contact Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>GTSS: <?php echo $title; ?></title>
</head>
<body>
    <?php include("phpdocs/header.php"); ?>

    <section>
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Welcome to Gizmo Tech Security Services Limited! We’re not just about technology; we’re about building relationships. As a cutting-edge provider of innovative system development solutions, we’re here to empower your business. Our mission? To safeguard your assets, enhance security, and help you achieve your goals. Reach out to us today – your trusted partner for all things security and IT.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="contact-info-item col-md-4">
                    <div class="contact-info-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Address</h4>
                        <p>
                            4671 Candy Lane Ave,<br/>
                            Beverly, Kingston 9<br/>
                        </p>
                    </div>
                </div>

                <div class="contact-info-item col-md-4">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Phone</h4>
                        <p>876-873-8002-9</p>
                    </div>
                </div>

                <div class="contact-info-item col-md-4">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Email</h4>
                        <p>example@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form id="contact-form">
                    <h5>Please note: all fields are required</h5>
                    <h2>Contact our team</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <span>First Name:</span>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <span>Last Name:</span>
                    </div>
                    <div class="input-box">
                        <input type="email" required>
                        <span>Email Address:</span>
                    </div>
                    <div class="input-box">
                        <textarea required></textarea>
                        <span>Type your message .......</span>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
