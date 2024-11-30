<?php

include 'Connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['Email'];

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $stmt = $conn->prepare("INSERT INTO subscriptions (Email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo "Thank you for subscribing!";
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Invalid email address.";
    }
}

$conn->close();
?>
