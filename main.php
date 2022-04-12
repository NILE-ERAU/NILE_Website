<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <title>Welcome</title>
    <style>
        body{ font-family:Verdana; text-align: left; }
    </style>
</head>
<body>
<img src="/images/NILE_corner.png" alt="NILE Triangle Logo" style="width:400px">
<p>Logged in as <?php echo $_SESSION["role"]; ?></p>
</body>
</html>
