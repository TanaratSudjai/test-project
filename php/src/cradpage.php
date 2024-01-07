<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PAGE</title>
    <style>
            .card {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .card-body {
            height: 270px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
    </style>
</head>

<body>

    <?php
    include 'navindex.php';
    ?> 
   
        <div class="container">
            <div class="row">
                <?php
                include('conn.php');
                include('select.php');
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <style>
                    .card-body {
                        height: 270px; 
                        overflow: hidden; 
                        text-overflow: ellipsis;
                    }
                </style>
                        <div class="xx col-md-3">
                            <div class="card m-3 rounded bg-light p-2">
                                <div class="card-body text-center">
                                    <td><img src="image/<?php echo $row['image']; ?>" width="150px" height="150px" alt=""></td>
                                    <h5 class="card-title mt-3"><?php echo $row['name']; ?></h5>
                                    <p class="card-text" id="viwe">AUTHOR : <?php echo $row['author']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                }
                ?>
            </div>
    </div>

</body>
</html>

<style>
    .container{
        margin-top: 100px;
    }
</style>