<?php 
include "connect.php";
function test ($sql,$button,$table,$tableVar1,$tableVar2,$pencarian1,$pencarian2){
    if($_GET[$button]){
        $sql = "SELECT * FROM $table WHERE $tableVar1 LIKE '%".$pencarian1."%' OR $tableVar2 LIKE '%".$pencarian2."%' ";
    }else{
        $sql = "SELECT * FROM $table";
    }
    $tampil = mysqli_query($conn , $sql);
}
?>