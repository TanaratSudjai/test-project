<?php

include_once('function.php');

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $detetedata = new DB_con();
        $sql=$detetedata->delete($id);

        if($sql){
            echo "<>alert('Record Delete  Successfully...');</>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }
?>