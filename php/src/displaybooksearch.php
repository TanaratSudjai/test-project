<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/index.css">

</head>

<body>

    <?php
        include 'navindex.php';
        
    ?>

    <div class="mt-5 p-5">
        <div class="container mt-5">
            <div class=" row ">
                <?php
                include 'conn.php';
                include 'searchsystem.php';

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class=" col-md-3 ">
                            <div class=" card m-3 rounded bg-light p-2">
                                <div class=" card-body text-center">
                                    <td><img src="image/<?php echo $row['image']; ?>" width="150px" height="150px" alt=""></td>
                                    <h5 class="card-title mt-3"><?php echo $row['name']; ?></h5>
                                    <p class="card-text" id="viwe">AUTHOR : <?php echo $row['author']; ?></p>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No books found.";
                }
                ?>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
