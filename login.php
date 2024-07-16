<?php
    include("phpdocs/loginValidation.php");
    $title = "Login Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>GTSS: <?php echo $title; ?></title>
    <style>
        .login,
        .image {
        min-height: 100vh;
        }

        .bg-image {
        background-image: url('https://bootstrapious.com/i/snippets/sn-page-split/bg.jpg');
        background-size: cover;
        background-position: center center;
        }
        h3{
            font-family: 'times', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 mx-auto">
                    <h3 class="display-4 text-center " >GTSS Login</h3>
                    <p class="text-muted mb-4 text-center">login to pick up where you left off.</p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group mb-3">
                        <input id="username" type="email" name="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                        <span><?php echo $usernameErr?></span>
                        </div>
                        <div class="form-group mb-3">
                        <input id="password" name="password" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                        <span><?php echo $passwordErr?></span>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                        <div class="text-center d-flex justify-content-between mt-4">
                        <?php
                            // Show the registration button only if there is an error with the usernames and password
                            if (isset($showRegistrationButton) && $showRegistrationButton) {
                                echo '<p>Don\'t have an account? <a href="registration.php">Register here</a>.</p>';
                            }
                            ?>
                        </div>
                    </form>
                    </div>
                </div>
                </div><!-- End -->

            </div>
            </div><!-- End -->

        </div>`
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>