<?php 
include('config.php');
include('../session.php');
?>
<html>
<head><script type="text/javascript">
  function loadNewDoc(){
      window.location="activeQ.php";
  }
  </script><title>sas</title></head>
<body onLoad="setTimeout('loadNewDoc()', 1500)"></body>
</html>
<?php
//echo $_SESSION['login_user_id'];
//echo "here voted data will be entered and updated into the data base, and will make sure that no user gets to vote twice for the same question";


//lnk holds the linker valie, i.e the question id
$lnk = mysqli_real_escape_string($conn,$_POST['link']);
//echo $lnk;

//ans holds  OPTion
$ans = mysqli_real_escape_string($conn,$_POST[$lnk.'r']);


//echo $ans;
$sqlfinal="insert into checkx values(".$_SESSION['login_user_id'].",".$lnk.",'".$ans."')";

if($ans=='yes'){
$sql="update question set yesCount=yesCount+1 where questionId=".$lnk;

//echo "yes set";
}
else{
$sql="update question set noCount=noCount+1 where questionId=".$lnk;
//echo "no set";
}

//echo $sql;

$result = mysqli_query($conn,$sql);
if($result==1)
$result = mysqli_query($conn,$sqlfinal);

//echo $result;		

echo "<center><h1>Your answer is successfull submited!!</h1></center>"



?>