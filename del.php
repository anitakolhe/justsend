<?php
    session_start();
    include'connection.php';
    $db=mysqli_connect($servername,$username,$password,$dbname);
     
    //delete recrds
      if(isset($_GET['del'])){
        $id=$_GET['del'];
        
        mysqli_query($db,"DELETE FROM  msg WHERE msg_id=$id");
    
        $_SESSION['msg']="Deleted";
    
        header('location:index.php');
    }   

   
?>