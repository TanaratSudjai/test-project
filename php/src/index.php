<?php
include 'conn.php';
include 'systemlogin.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGINPAGE</title>
    <link rel="stylesheet" href="./style/loginbody.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form class="form" action="" method="post">
            <h2>USER <br> LOGINPAGE</h2>
            <label for="username">USERNAME</label>
            <input class="username" type="text" name="username" required>
            <br>
            <label for="password">PASSWORD</label>
            <input class="passwd" type="password" name="password" required>
            <br>
            <div class="btns">
                    <input class="submit" type="submit" value="LOGIN">
                    <a class="res" href="register.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" height="30" width="30"><defs></defs><title>patient-register</title><path d="m45.764 30.378 -15.048 15.046a1.028 1.028 0 0 1 -0.51 0.274l-5.734 1.146a1 1 0 0 1 -1.176 -0.786 0.984 0.984 0 0 1 0 -0.4l1.146 -5.73a1 1 0 0 1 0.274 -0.51l15.048 -15.046a4.23 4.23 0 0 1 5.982 0l0.018 0.016a4.238 4.238 0 0 1 0 5.99Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="M6.502 9.638a8.5 8.5 0 1 0 17 0 8.5 8.5 0 1 0 -17 0" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m21 37.138 -20 0.012v-2.012a14 14 0 0 1 26.126 -7" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="M12.582 14.124a3.168 3.168 0 0 1 4.85 0.014" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m15.006 29.142 0 8.008" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m8.562 22.7 6.444 6.442" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m21.452 22.7 -6.446 6.442" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path></svg></a>
            </div>
        </form>
        <img src="https://star.daythree.net/verification/dist/img/bg_login.png" alt="" class="bg">
    </div>

</body>

</html>


