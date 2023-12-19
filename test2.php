<?php
    function debug ($test) {
        if(isset($_SESSION['login'])){
            $test = $_SESSION['login'];
            echo $test , "S";
        }elseif(isset($_COOKIE['remember'])){
            $test = $_COOKIE['remember'] = $_SESSION['login'];
            echo $test , "C";
        }else{
            $test = "nothing here";
            echo $test;
        }
        // echo $test;
    }
?>