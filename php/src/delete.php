<?php

include_once('function.php');

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $detetedata = new DB_con();
        $sql=$detetedata->delete($id);
        if($sql){
            echo "<script>alert('Record Delete  Successfully Row : '+{$id});</script>";
            echo "<script>window.location.href='indexS.php'</script>";
        }
    }
?>