<?php
   
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="mark";
      $conn= new mysqli($servername,$username,$password,$dbname);
   session_start();
   
    $user_check = $_SESSION['login_user_id'];
   
   $sql = "select userid, name, priv from users where userid = '$user_check' ";
   $results=$conn->query($sql);
   $row=$results->fetch_assoc();
   
   
   
   $login_session = $row['name'];
   $login_priv = $row['priv'];
   
   if(!isset($_SESSION['login_user_id'])){
      header("location:login.php");
      die();
   }
?>