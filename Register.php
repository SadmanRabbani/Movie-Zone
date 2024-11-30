<?php

include 'Connect.php';

if (isset($_POST['SignUp'])) {
    $FirstName = $_POST['First_Name'];
    $LastName = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password = md5($Password);

    $checkEmail = "SELECT * From users where Email = '$Email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users(FirstName, LastName, Email, Password) VALUES ('$FirstName', '$LastName', '$Email', '$Password')";

        if ($conn->query($insertQuery) == TRUE) {
            header("location: login.php");
        } else {
            echo "Error:" . $conn->error;
        }
    }
}

if (isset($_POST['SignIn'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password = md5($Password);

    $sql = "SELECT * From users where Email = '$Email' and Password = '$Password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['Email'] = $row['Email'];
        header('Location: Homepage.php');
    } else {

        echo "Not Found, Incorrect Email or Password";
    }
}

?>
