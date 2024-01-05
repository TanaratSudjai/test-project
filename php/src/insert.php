<?php
include 'conn.php';

if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $author = $_POST['author'];
    // image upload
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $target = "image/" . basename($image); 
    $sql = "INSERT INTO book (name, author, image) VALUES ('$name', '$author', '$image')";
    $result = mysqli_query($conn, $sql);
   
    if($result) {
        if(move_uploaded_file($image_temp, $target)) {
            echo "<script>alert('Record Inserted Successfully...')</script>";
            echo "<script>window.location.href='insert-form.php'</script>";
        } else {
            echo "<script>alert('Failed to upload image. Please try again!...')</script>";
            echo "<script>window.location.href='insert-form.php'</script>";
        }
    } else {
        echo "<script>alert('Failed to insert record. Please try again!...')</script>";
        echo "<script>window.location.href='insert-form.php'</script>";
    }
}
?>
