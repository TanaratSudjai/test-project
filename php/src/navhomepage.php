<?php
 include 'conn.php' ; 
    $query = "SELECT username FROM users WHERE id = 5"; 
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
    } else {
        $username = "Guest"; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/search.css">
    <link rel="stylesheet" href="index2.css">
</head>
<body>

    <div class="navbar navbar-expand-lg navbar-light bg-light p-5 fixed-top">
        <a class="navbar-brand" style="font-weight: bold; width:150px" href="index.php">HOMEPAGE</a>
        <div class="nav2 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">HOMEPAGE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cradpage.php">CRADBOOK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert-form.php">INSERT BOOK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexS.php">EDIT & DELETE</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" style="color: red;" href="index.php">LOGOUT</a>
                </li>
                <div class="nav-item">
                    <li class="nav-item">
                        <span class="nav-link">Welcome, <?php echo $row['username']?></span>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.querySelector('.navbar');
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 0);
        });
    </script>

</body>
</html>
