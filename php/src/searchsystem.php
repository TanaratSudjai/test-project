<?php
include('conn.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = $_POST['query'];
    $sql = "SELECT * FROM book WHERE name LIKE '%$query%'";

    $result = mysqli_query($conn,$sql);
}
?>
