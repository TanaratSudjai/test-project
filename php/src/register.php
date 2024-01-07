<?php
    include 'conn.php';
    include 'res.php';
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER RSGISTRATION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <img src="https://www.wsioms.co.za/wp-content/uploads/2021/09/New-Project-15.png" alt="" class="bg">
            <form class="form" action="register.php" method="post">
                <h2>USER RSGISTRATION</h2>
                <label for="username">USERNAME</label>
                <input class="username" type="text" name="username" required>
                <br>
                <label for="password">PASSWORD</label>
                <input class="passwd" type="password" name="password" required>
                <br>
                <div class="btn">
                    <input class="submit" type="submit" value="REGISTER">

                    <div class="icon">
                        <a class="cls" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1 h-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </form>
        </div>
 
</body>
</html>


<style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('https://assets.browserlondon.com/app/uploads/2020/05/Indigo-design-award-header-2304x1296.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    label{
        margin-top: 10px;
        color: black;
    }
    .container{
        display: flex;
        margin-top: 1rem;
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

.btn {
    display: flex;
    gap: 15px;
}
.submit:hover{
    box-shadow: 1px 1px 15px 1px #4965c9;
}

.btn .icon{
    width: 25px;
    height: 25px;
    margin-top: 7px;
}


</style>