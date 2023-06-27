<?php
$SAlert = FALSE;
$LAlert = FALSE;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signup"])) {
        include '../PHP/dbconnect.php';
        $username = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["pswd"];

        // Check if the user already exists
        $checkSql = "SELECT * FROM `users` WHERE TRIM(`email`) = '$email'";
        $checkResult = mysqli_query($conn, $checkSql);
        if (mysqli_num_rows($checkResult) > 0) {
            $SAlert = TRUE; // Set signup alert if user already exists
        } else {
            // Insert the new user into the database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$hashedPassword', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location:../Homepage/Homepage.php");
                exit();
            }
        }
    } elseif (isset($_POST["login"])) {
        include '../PHP/dbconnect.php';
        $email = $_POST["email"];
        $password = $_POST["pswd"];

        // Check if the user already exists
        $checkSql = "SELECT * FROM `users` WHERE (`email`) = '$email'";
        $checkResult = mysqli_query($conn, $checkSql);
        if ($checkResult && mysqli_num_rows($checkResult) > 0) {
            $row = mysqli_fetch_assoc($checkResult);
            $storedPassword = $row['password'];
            if (password_verify($password, $storedPassword)) {
                // Password is correct, log in the user
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['username'];
                header("location:../Homepage/Homepage.php");
                exit();
            }
        }
        // Invalid login credentials
        $LAlert = TRUE; // Set login alert for invalid credentials
    }
}
?>