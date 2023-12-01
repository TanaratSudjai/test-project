<?php
include_once('function.php');

$updatedata = new DB_con();

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $sql = $updatedata->update($name, $author, $id);
    if($sql){
        echo "<script>alert('Updated Successfully...')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again...')</script>";
        echo "<script>window.location.href='update.php?id=$id'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <h3 class="m-1 mt-5 text-center">การแก้ไขข้อมูล</h3>
        <a href="indexS.php" class="btn btn-info m-2">กลับ</a><hr>
        <hr>
        <?php
            $id = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($id);
            while($row = mysqli_fetch_array($sql)){
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">BOOKS NAME</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">AUTHOR</label>
                <input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" required>
            </div>
            <?php 
        } 
        ?>
            <button type="submit" name="update" class="btn mt-2 btn-success">UPDATE</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
