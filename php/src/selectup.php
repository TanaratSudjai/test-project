<?php 
include 'conn.php' ; 
$sql = "SELECT * FROM book WHERE id = $id";

$result = mysqli_query($conn,$sql);