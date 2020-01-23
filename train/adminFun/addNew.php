<?php

?>
<html>
<head><script type="text/javascript">
  function loadNewDoc(){
      window.location="../welcome.php";
  }
  </script><title>sas</title></head>
<body onLoad="setTimeout('loadNewDoc()', 1000)" style="background-image: linear-gradient(to right, #F5B7B1, #85C1E9);"></body>
</html>

<?php
//echo "check";

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
      
       $question_txt = mysqli_real_escape_string($conn,$_POST['question']);

      $sql = "insert into question values(NULL,0,0,'$question_txt')";
     $res=$conn->query($sql);

     if($res)
      {  
		echo "<center><h2 style='color: red;'>question added successfully</h2></center>";?>
		
<?php
	}
  }
  else
  		{echo "faliled0";}


?>
