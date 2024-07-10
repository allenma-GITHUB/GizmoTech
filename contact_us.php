<section?php
    $title = "Contact Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-3l5+GcOK/4lQdDjz5wWm+qP+f7UznPd0rp3L9FtZAY0QgkgyC6O22ECw3sF1S5+QZgyKJl0jGMQKYl1A4Of3yQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>GTSS: <?php echo $title; ?></title>
</head>
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h1 class="mb-4 display-5 text-center">Contact Us</h1>
                    <p class="text-secondary mb-5 text-center">Welcome to Gizmo Tech Security Services Limited! We’re not just about technology; we’re about building relationships. As a cutting-edge provider of innovative system development solutions, we’re here to empower your business. Our mission? To safeguard your assets, enhance security, and help you achieve your goals. Reach out to us today – your trusted partner for all things security and IT.</p>
                    <hr class="w-auto mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="contact-info-item col-md-4">
                    <div class="contact-info-icon">
                        <img src="img/contact/location.jpeg" alt="Address Icon" width="50">
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
                        <img src="img/contact/phone.jpeg" alt="Phone Icon" width="50">
                    </div>
                    <div class="contact-info-content">
                        <h4>Phone</h4>
                        <p>876-873-8002-9</p>
                    </div>
                </div>
                <div class="contact-info-item col-md-4">
                    <div class="contact-info-icon">
                        <img src="img/contact/email.jpeg" alt="Email Icon" width="50">
                    </div>
                    <div class="contact-info-content">
                        <h4>Email</h4>
                        <p>example@gmail.com</p>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#"><img src="img/contact/whatsapp.jpeg" alt="WhatsApp"></a>
                    <a href="#"><img src="img/contact/twitter.png" alt="Twitter"></a>
                    <a href="#"><img src="img/contact/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="img/contact/facebook.png" alt="Facebook"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-9">
                    <div class="bg-white border rounded shadow-sm overflow-hidden">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                <h5 class="mb-0 display-11 text-center" style="color: red; display:none">Please note: all fields are required</h5>
                                <div class="col-12">
                                    <label for="fullname" class="form-label">First Name <span class="text-danger" style="display:none;">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="firstname" value="" required>
                                </div>
                                <div class="col-12">
                                    <label for="fullname" class="form-label">Last Name <span class="text-danger" style="display:none;">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="lastname" value="" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger" style="display:none;">*</span></label>
                                    <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message <span class="text-danger" style="display:none;">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include("phpdocs/footer.php")
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
