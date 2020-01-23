<?php 
//echo "here new questions will be added to the database";
?>
<!DOCTYPE html>
<html>
<head>
<title>Adding new question</title>

<script type="text/javascript">
  
function blank()
{
  //alert("fun called");
  var str=document.getElementsByName('question')[0].value;
 // alert("value="+str);

  if(str=="")
    document.getElementById('submit').disabled=true;
  else
    document.getElementById('submit').disabled=false;
  
}
  
</script>

</head>
<body id='grad'>
  <div><center><img src="../pics/trans.jpg" alt="quote" width=50% height=60%></center></div>
	<h1>Enter New Question</h1>
    <form action="addNew.php" method="post">
      <fieldset>
        <legend>Question</legend>
        <p>
          
          <textarea rows="4" cols="100" name="question" placeholder="Enter your new question here" oninput='blank()'></textarea>
          <button type='submit' name="submit" id="submit" disabled >submit </button>
        </p>
    </fieldset>
</form>
</body>
</html>

<style type="text/css">
  button:hover{
    transform: scale(1.1);
  }

  #grad {
      
     /* background-color: blue; /* For browsers that do not support gradients */
      background-image: linear-gradient(to right, #F5B7B1, #85C1E9);
      }
</style>