<?php
session_start();
include("Connect.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
</head>

<body>
    <div style="text-align: center; padding: 15%;">
        <p style="font-size: 50px; font-weight: bold;">
            Welcome! <?php

                        if (isset($_SESSION['Email'])) {
                            $Email = $_SESSION['Email'];
                            $query = mysqli_query($conn, "SELECT users.* FROM 'users' WHERE users.Email = '$Email'");
                            while ($row = mysqli_fetch_array($query)) {
                                echo $row['FirstName'] . '' . $row['LastName'];
                            }
                        }
                        ?>
        </p>

        <header>
            <a href="Index.php" class="logo">
                <i class='bx bxs-movie'></i>Home
            </a>
        </header>

    </div>
</body>

</html>