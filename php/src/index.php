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
            <div class="btn">
                <input class="submit" type="submit" value="LOGIN">
                <a class="res" href="register.php">Register ?</a>
            </div>
        </form>
        <img src="https://star.daythree.net/verification/dist/img/bg_login.png" alt="" class="bg">
    </div>
</body>
</html>

<style>
    body{
        margin: 0;
        padding: 0;
        background-color: white;
    }
    label{
        margin-top: 10px;
        color: black;
    }
    .container{
        display: flex;
        margin-top: 7rem;
        height: 500px;
        width: 1000px;
        justify-content: center;
        align-items: center;
        gap: 4rem;
        background-color: white;
        border-radius: 25px;
        box-shadow: 5px 10px 15px 5px #e9e7e7;
    }
    .form .username, .passwd{
        box-shadow: 5px 5px 10px 5px #e9e7e7;
        padding: 5px;
        border-radius: 5px;
        border: 2px solid #afbef3;
    }
    .form h2{
        font-weight: bold;
        text-shadow: 10px 10px 40px #4965c9;
        color: #4965c9 ;
        font: bold;
        margin-bottom: 15px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .form{
        display: grid;
        color: black;
        padding: 4rem;
        width: 55%;
    }
    .bg{
        height: auto;
        width: 60%;
        padding: 25px;
    }

.submit{
    background-color: #4965c9;
    text-decoration: none;
    color: white;
    border-radius: 7px;
    padding: 5px;
    width: 60%;
    border: solid #4965c9;
}
.btn{
    display: flex;
    gap: 15px;
    font-weight: bold;
}
.btn a{
    margin-top: 12px;
    text-decoration: none;
    color: red;
}
.submit:hover{
    box-shadow: 1px 1px 15px 1px #4965c9;
}


</style>