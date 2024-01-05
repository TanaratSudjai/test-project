<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PAGE</title>
    <link rel="stylesheet" href="./style/uploadimage.css">
    <link rel="stylesheet" href="./style/insert-form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/bottonup.css">

</head>
<body>

<?php
    include 'conn.php';
    include 'navupdate.php';
?>

        <?php
            $id = $_GET['id'];
            include('updatesystem.php');
            include('selectup.php');
            while($row = mysqli_fetch_assoc($result)){
        ?>
        
<div class="mt-5 p-5">
        
    <div class="container mt-5">
        <form  action="" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="cards card-header " style="background: #000;
                            background: linear-gradient(90deg, #000 0%, rgba(42,151,180,1) 100%); color:#fff;">
                    <h3 class="mb-0">INSERT NEW BOOKS  </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">NEW BOOKS NAME</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="author" class="form-label">NEW AUTHOR</label>
                        <input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" required>
                    </div>
                    <div class="preimage">
                        <label for="file" class="custum-file-upload">
                                <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>
                                </div>
                                <div class="text">
                                <span>Click to upload image</span>
                                </div>
                                <input id="file" type="file" name="image" required onchange="previewImage(this);">
                        </label>
                        <div class="mt-2">
                                <img id="previewImg" style="max-width: 200px; max-height: 200px; " class="img-preview border">
                         </div>
                    </div>
                   
                <?php 
            }?>
                    <div class="action">
                        <button class="button" name="update">
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                            <svg class="icon" height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22,15.04C22,17.23 20.24,19 18.07,19H5.93C3.76,19 2,17.23 2,15.04C2,13.07 3.43,11.44 5.31,11.14C5.28,11 5.27,10.86 5.27,10.71C5.27,9.33 6.38,8.2 7.76,8.2C8.37,8.2 8.94,8.43 9.37,8.8C10.14,7.05 11.13,5.44 13.91,5.44C17.28,5.44 18.87,8.06 18.87,10.83C18.87,10.94 18.87,11.06 18.86,11.17C20.65,11.54 22,13.13 22,15.04Z">
                                </path>
                                </svg>
                            </div>
                        </div>
                        <span>Save</span>

                        </button>
                        <a href="indexS.php"><span>CANCLE</span></a>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

<script src="displayfilename.js"></script>
</body>
</html>
