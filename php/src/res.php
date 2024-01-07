<?php
include 'conn.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn,$sql) ; 
    if ($result === TRUE) {
        echo "<script>alert('Register Successfully...')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}