<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: 5_6_login.php");
    exit();
}

?>

<a href="5_6_login.php">Logout</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?php echo "Welcome " . $_SESSION['username']; ?> </h1>
</body>

</html>