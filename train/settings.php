<?php 


?>

<html>
<head>
	<title>changed</title>
	<script type="text/javascript">
		function passCheck()
		{
			var val1=document.getElementById('pass1').value;
			var val2=document.getElementById('pass2').value;
			
			if(val1==val2&& val2=="")
			{
				document.getElementById('passError').innerHTML="<h3 style='color: red'></h3>";
				var bt=document.getElementsByName('changePass');
				bt[0].disabled=true;

			}
			else if(val1!=val2)
				{document.getElementById('passError').innerHTML="<h3 style='color: red'>PASSWORD NOT MATCHED</h3>";
				var bt=document.getElementsByName('changePass');
				bt[0].disabled=true;
				}
			else
				{document.getElementById('passError').innerHTML="<h3 style='color: green'>PASSWORD MATCHED</h3>";
				var bt=document.getElementsByName('changePass');
				bt[0].disabled=false;
				}

		}

		function phoneCheck(item){
			var val=document.getElementById('phoneNo').value;
			var len=val.length;
			
			if(val=="")
			{
				document.getElementById('phoneError').innerHTML="<h3 style='color: red'></h3>";
				var bt=document.getElementsByName('changePhoneNo');
				bt[0].disabled=true;

			}
			else if(len!=10)
				{document.getElementById('phoneError').innerHTML="<h3 style='color: red'>INVALID PHONE NO</h3>";
				var bt=document.getElementsByName('changePhoneNo');
				bt[0].disabled=true;
			}
			else
				{document.getElementById('phoneError').innerHTML="<h3 style='color: green'>OK!!!</h3>";
				var bt=document.getElementsByName('changePhoneNo');
				bt[0].disabled=false;
			}
		}

	</script>
</head>
<body id='grad'>
	<br>
	<br>
	<button onclick="window.location.href = 'welcome.php';" style="background-color: cyan">HOME</button>
	<br><br>
	<form action='changePass.php' name='password' style='float: left; width: 50%;' method="post">
			<label>Enter new password&nbsp</label><input type='password' name='pass' id='pass1' oninput='passCheck(this)'><br><br>
			<label>Confirm password&nbsp&nbsp&nbsp&nbsp</label><input type='password' id='pass2' oninput='passCheck(this)'>
			
			<button type='submit' name='changePass' value='change' disabled>change</button>
			<br><br>
			<div id='passError'> </div>
		</form>

	<form action='changePhoneNo.php' name='phoneNo' style='float: left; width: 50%;' method="post">
			<label>Enter New Phone NO.&nbsp</label><input type='text' name='phone' id='phoneNo' oninput='phoneCheck(this)'>
			<button type='submit' name='changePhoneNo' value='change' disabled>change</button>
			<br><br>
			<div id='phoneError'> </div>
		</form>

</body> 

</html>

<style type="text/css">
	
	button:hover{
		transform: scale(1.1);
	}
	input:hover{
		transform: scale(1.05);
	}
	#grad {
      
     /* background-color: blue; /* For browsers that do not support gradients */
      background-image: linear-gradient(to right, #D0B7B1, #85C1D9);
      }
</style>