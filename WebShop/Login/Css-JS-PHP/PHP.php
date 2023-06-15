<?php

    $firstname = $_POST['fname'];
    $password = $_POST['pass'];

    $firstname = stripslashes($firstname);
    $password = stripslashes($password);

    $conn = mysqli_connect("localhost", "root", "", "webshop");

    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($conn, "webshop");

    // Prepare a statement with a parameterized query
    $stmt = mysqli_prepare($conn, "SELECT * from users where firstname = ? and password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $firstname, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);

    if (!empty($row) && $row['firstname'] == $firstname && $row['password'] == $password){
        // echo "Welcome " . $row['firstname']; 
    } else {
        echo "Failed to login!";
        header("Location: error.php");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>