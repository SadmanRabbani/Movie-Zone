<?php
session_start();
include("Connect.php");

if (!isset($_SESSION['Email'])) {
    
    header("Location: login.php");
    exit;
}

$Email = $_SESSION['Email'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$Email'");

if (!$query) {
    die("Database query failed: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($query);
$FirstName = $user['FirstName'] ?? "User";
$LastName = $user['LastName'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 15%;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }

        header .logo {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <a href="Index.php" class="logo">
            <i class='bx bxs-movie'></i>Home
        </a>
    </header>

    <p style="font-size: 50px; font-weight: bold;">
        Welcome, <?php echo $FirstName . ' ' . $LastName; ?>!
    </p>
</body>

</html>
