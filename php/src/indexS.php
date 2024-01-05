<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PAGE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./style/update-form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

    <?php
        include 'navedit.php';
    ?>

<div class="mt-5 p-5">
    <div class="container mt-5">
        <?php
        include('conn.php');
        include 'select.php';
      
        
        if (mysqli_num_rows($result) > 0) {
            ?>
            <div class="itemtable">
                <table class="table">
                    <thead class="thead  " 
                    style=" background: #000;
                            background: linear-gradient(90deg, #000 0%, rgba(42,151,180,1) 100%); color:#fff; ">
                        <th class="th-table">ID</th>
                        <th class="th-table">BOOKS NAME</th>
                        <th class="th-table">AUTHOR</th>
                        <th class="th-table">LOGO</th>
                        <th class="th-table">EDIT</th>
                        <th class="th-table">DELETE</th>
                    </thead>
                    <tbody >
                        <?php
                        $id = 1; // Initialize book ID
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr class="dd " >
                                <style>
                                    .dd:hover{
                                        color: #000;
                                        background-color: #fff;
                                        box-shadow: 0 2px 5px #c7c7c7;
                                        transform: translateY(1px);
                                    }
                                </style>
                                <td style="border: 1px solid #cccdd2;"> <?php echo $id++; ?></td>
                                <td style="border: 1px solid #cccdd2;"> <?php echo $row['name']; ?></td>
                                <td style="border: 1px solid #cccdd2;"> <?php echo $row['author']; ?></td>
                                <td style="border: 1px solid #cccdd2;"> <img src="image/<?php echo $row['image']; ?>" width="100px" height="100px" alt="" "></td>
                                <td style="border: 1px solid #cccdd2;"> <a href="update-form.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                    </svg></a></td>
                                <td style="border: 1px solid #cccdd2;"><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                    </svg></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
        } else {
            echo '<h6 class="text-center">NOTHING DATABOOKS TO LIST... !</h6>';
        }
        ?>
        <hr>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
 
