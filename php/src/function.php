<?php
    define('DB_SERVER','db');
    define('DB_USER','root');
    define('DB_PASS','MYSQL_ROOT_PASSWORD');
    define('DB_NAME','books');

    class DB_con{

        function __construct(){

            $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->DBcon = $conn ; 

            if(mysqli_connect_errno()){
                echo "Config Database failed!..." . mysqli_connect_error();
            }
        }
        
        public function insert($name, $author){
            $name = mysqli_real_escape_string($this->DBcon, $name);
            $author = mysqli_real_escape_string($this->DBcon, $author);
            $result = mysqli_query($this->DBcon, "INSERT INTO book(name, author) VALUES('$name', '$author')");
            return $result;
        }
        
        public function fetchdata(){
            $result = mysqli_query($this->DBcon, "SELECT * FROM book" );
            return $result;
        }

        public function fetchonerecord($id){
            $result = mysqli_query($this->DBcon, "SELECT * FROM book WHERE id ='$id'");
            return $result;
        }
        public function update($name, $author, $id){
            $result = mysqli_query($this->DBcon, "UPDATE book SET 
            name='$name',
            author='$author'
            WHERE id ='$id'
            ");
            return $result;
        }

        public function delete($id){
            $deletedata = mysqli_query($this->DBcon, "DELETE FROM book WHERE id='$id'");
            return $deletedata;
        }

    }
?>