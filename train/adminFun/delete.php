<?php
?>

<html>

	<script type="text/javascript">
		function conf(c)
		{
			if(confirm(c+" question(s) are selected, do you want to delete?"))
			{alert("ok");}
			else
			{
				//window.history.back();
				<?php $f=false; ?>
			}

		}
	</script>


</html>


<?php
echo "here question can be deleted";
include("config.php");



if(isset($_POST['DELETE']))
{
    $checkbox = $_POST['checkbox'];
    echo "reached";
    $cn=count($checkbox);
    $f='somthng';
   	echo "<script>conf(".$cn.");</script>";
   	
   

   	
	for($i=0;$i<count($checkbox);$i++)
	{
	echo $i;
	$del_id = $checkbox[$i];
	echo "deleted  ".$del_id;
	$sql = "DELETE FROM question WHERE questionId='$del_id'";
	$result = mysqli_query($conn,$sql);
	if($result>0)
	echo "deletion successful"."   ".$f;
	else
	echo "delettion failed";
	}
	
}
else
echo "not found";

?>
<html>
<button onclick="window.location.href = 'view_all.php';">GO BACK TO VIEW</button>

</html>
