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
            echo "<script>alert('Login successful!.. ')</script>";
            echo "<script>window.location.href='homepage.php'</script>";   
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}