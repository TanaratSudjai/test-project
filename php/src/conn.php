<?php

    $server = "db" ; //server image db sql
    $user = "root" ; 
    $pass = "MYSQL_ROOT_PASSWORD" ; //passwd sql image
    $database= "books" ; 

    $conn =  new mysqli($server,$user,$pass,$database);
    
    if(!$conn) die  . mysqli_connect_error(); 