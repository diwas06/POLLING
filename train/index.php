<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mark";
echo "sample check";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
 }
 
 	$sql = "select * from users";
 	$results=$conn->query($sql);
 	
 	while($row=$results->fetch_assoc())
 	{
 		if($row['userid']=='1711141038' && $row['pass']=='123456')
 			{echo 'successful login';
             break;
 			}
 		else
 		{
 			echo "not login";
 		}
 	}
 	
 	$conn->close();
 
 ?>
