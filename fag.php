<?php
    session_start();
    $title = "FAQ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-3l5+GcOK/4lQdDjz5wWm+qP+f7UznPd0rp3L9FtZAY0QgkgyC6O22ECw3sF1S5+QZgyKJl0jGMQKYl1A4Of3yQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>GTSS: <?php echo $title; ?></title>
</head>
<body>
   <?php
        include("header.php");
   ?>
    <section>
        add your code here!
    </section>
   <?php
        include("footer.php");
   ?>
</body>
</html>