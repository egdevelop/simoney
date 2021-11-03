<?php 
session_start();
include "koneksi.php";

if(isset($_SESSION['userid'])){
    
}else{
    header("location:login.php");
}

?>