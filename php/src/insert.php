<?php
    include_once('function.php');

    $insertdata = new DB_con();

    if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $author = $_POST['author'];

        $sql = $insertdata->insert($name,$author);

        if($sql){
            echo "<script>alert('Record Insert Successfully...')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('Somthing went wrong! Please try again!...')</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <h4 class="m-1 mt-5 text-center">INSERT BOOKS PAGE</h4><br><hr>
        <a href="index.php"  class="btn btn-info m-2">BACK TO INDEX</a><hr>

        <form  action="" method="post">
        <div class="mb-3">
        <label for="name" class="form-label">BOOKS NAME</label>
        <input type="text" class="form-control" name="name"  required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">AUTHOR</label>
            <input type="text" class="form-control" name="author" required>
        </div>
        <button type="submit" name="insert" class="btn btn-info">INSERT</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>