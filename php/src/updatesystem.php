<?php

include 'conn.php' ; 

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_temp, "image/$image");
    } else {
        $image = $_POST['current_image'];
    }

    $sql = "UPDATE book SET 
            name='$name',
            author='$author',
            image='$image'
            WHERE id ='$id'
        ";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Updated Successfully...')</script>";
        echo "<script>window.location.href='indexS.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again...')</script>";
        echo "<script>window.location.href='update-form.php?id=$id'</script>";
    }
}