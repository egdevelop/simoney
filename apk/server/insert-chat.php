<?php 
    session_start();
    if(isset($_SESSION['userid'])){
        include_once "koneksi.php";
        $me_id = $_SESSION['userid'];
        $you_id = mysqli_real_escape_string($koneksi, $_POST['you_id']);
        $message = mysqli_real_escape_string($koneksi, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($koneksi, "INSERT INTO chat (user1,user2,pesan,jam) VALUES ('$me_id','$you_id','$message','$jam')");
            if($sql){
                echo "DONE";
            }
        }
    }else{
        header("location: koneksi.php");
    }
?>