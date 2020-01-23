<?php 
include('config.php');
include('session.php');
//echo "changing phone no page";

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      //echo "test";
       $phone_txt = mysqli_real_escape_string($conn,$_POST['phone']);
    //  echo "valeu=".$phone_txt;
      $sql = "update users set phone=".$phone_txt." where userid=".$_SESSION['login_user_id'];

     // 	echo $sql;
      $result = mysqli_query($conn,$sql);
	  if($result!=1)
	  echo "some error occured";

     }
?>
<html><head><script type="text/javascript">
  function loadNewDoc(){
      window.location="settings.php";
  }
  </script> </head>
<body onLoad="setTimeout('loadNewDoc()', 1000)"></body><br>
<br>
<br>
<center><h1 style="color: blue">PHONE NO CHANGED</h1></center>
</html>