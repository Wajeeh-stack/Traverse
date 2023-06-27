<?php
    // Start the session
    session_start();
    include '../PHP/dbconnect.php';

    $index = $_REQUEST['index'];
    $name = $_COOKIE["name".$index];
    $price = $_COOKIE["price".$index];
    $quantity = $_COOKIE["quantity".$index];

    // Retrieve the user's sno based on the session username
    $userCriteria = $_SESSION['username'];
    $sqlUser = "SELECT sno FROM users WHERE username = '$userCriteria'";
    $resultUser = mysqli_query($conn, $sqlUser);

    if ($resultUser && mysqli_num_rows($resultUser) > 0) {
        $rowUser = mysqli_fetch_assoc($resultUser);
        $sno = $rowUser['sno'];
    }

    // Insert the order details into the 'orders' table
    $sql = "INSERT INTO orders (user_id, product_name, product_price, persons, date)
            VALUES ('$sno', '$name', '$price', '$quantity', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
