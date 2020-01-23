<?php
include('session.php');
?>
<html>
<head>
	<title>welcome</title>
</head>
<body id='grad'>
	<div id='grad'>
		<div><img src="pics/chairman.jpg" width="100%" height="60%"></div>
		<hr>
		<div>
		<h1>Welcome <?php echo $login_session." (".$login_priv.")"; ?></h1>
	
		<?php if($login_priv=='admin')
		include('adminPage.php');
		else
			include("userPage.php");

		echo "<div style='float: right;'><h2> <a href='logout.php' id='so'>Sign out</a></h2></div>";
				


//	$to="hemdani.diwas@gmail.com";
//	$subject="any";
//	$txt="sample email text";
	
		?>
		</div>
			<br>
			<br>
			<hr>
	</div>
</body>
</html>
<style type="text/css">
	#so{
		color: red;

	}
	#so:hover{
		font-weight: normal;
	}
	button:hover{
		transform: scale(1.1);
	}

	
     #grad {
      
     /* background-color: blue; /* For browsers that do not support gradients */
      background-image: linear-gradient(to right, #1c87c9, #8ebf42);
      }
</style>