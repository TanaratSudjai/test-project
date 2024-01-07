<?php

 include 'conn.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "<script>window.location.href='homepage.php'</script>";   
        } else {
            echo "<script>alert('Login Password or Username error.. ')</script>";
        }
    } else {
        echo "<script>alert('Username null in database go to Re.. ')</script>";
    }
}