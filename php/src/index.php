<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PAGE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <h4 class="m-1 mt-5 text-center" >BOOKS TO DO LIST</h4><br><hr>
    <a href="insert.php" class="btn btn-info m-2">ADD TO LIST</a><hr>

    <?php
        include_once('function.php');
        $fetchdata = new DB_con();
        $sql = $fetchdata->fetchdata();
        if(mysqli_num_rows($sql) > 0) {  
    ?>
            <table id="mytable" class="table table-bordered table-striped">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AUTHOR</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($sql)){
                    ?>  
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            
                            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">EDIT</a></td>
                            <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                        </tr>
                    <?php
                        }
                         } else {
                            echo '<h6 class="text-center">NOTING DATA TO LIST... !</h6>';   
                        }
                    ?>
                </tbody>
            </table>
    <?php
  
    ?>
    <hr>
</div>

<!-- jQuery first, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>
</html>
