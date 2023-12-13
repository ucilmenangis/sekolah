<?php 
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "data_sekolah";
        $status;
        
        $conn = new mysqli($server , $username , $password , $database);
        //conditions
        if($conn -> connect_error){
            die("Connection failed: ". $conn->connect_error);
            $GLOBALS['status'] = "connection failed";
        }else{
            $GLOBALS['status'] = "connected";
        }
?>