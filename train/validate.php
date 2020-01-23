<?php
  // include("config.php");
   session_start();
   
   echo "validation is working fine";
   $servername="localhost";
$username="root";
$password="";
$dbname="mark";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
   die("connection failed".$conn->connect_error);
 }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myuserid = mysqli_real_escape_string($conn,$_POST['userid']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT userid FROM users WHERE userid = '$myuserid' and pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
        // session_register("myuserid");
         $_SESSION['login_user_id'] = $myuserid;

         echo "login succesful";
         
         header("Location:welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         

         header("Location:login1.html");

      }
   }
?>