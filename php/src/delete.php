<?php

include('conn.php');

    if(isset($_GET['del'])){
        $id = $_GET['del']; 
        $sql =  "DELETE FROM book WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Record Delete  Successfully Row : '{$id}');</script>";
            echo "<script>window.location.href='indexS.php'</script>";
        }
    }
?>