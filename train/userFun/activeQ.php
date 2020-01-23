<?php
//echo " here all active questions will be displayed with option to be yes or no";
include("../config.php");
include("../session.php")
?>
<html>
<head><title>QUESTIONS</title></head>
<body id='grad'></body>
</html>
<button onclick="window.location.href = '../welcome.php';">HOME</button>&nbsp&nbsp
<button onclick="window.location.href = 'activeQ.php';">REFRESH</button>
<hr>
<script type="text/javascript">
  
  //function to activate vote button if and only if any radio button is active
  function voteD(bt,th)
  {
    var sig=th.checked;
    alert("please recheck your answer, it will not be changed latter!!");
    var bts= document.getElementsByName(bt);
    if(sig==true)
    bts[0].disabled=false;
      
   
  }

  function counterCheck(item)
  {
      //alert("counterCheck called");
     // alert("taken value ="+item);
      
      var list=document.getElementsByName(item+'r');
        // alert("bodi"+list.length+list[0].value);
      
        list[0].disabled=true;
        list[1].disabled=true;
      var list1=document.getElementsByName(item);
      list1[0].value='voted';
      list1[0].style.background="#FF4500";


  }


</script>

<style type="text/css">
#QuesTable{
  border: 1pc solid black;
  width: 100%;
  border-spacing: 1pc;
}

#redbg{
  background-color: red;
  text-align: center;
}

#yellowbg{
  background-color: yellow;
  text-align: center;
}

#greenbg{
  background-color: green;
  text-align: center;
}

#delete{
  background-color: red;
  font-weight: 800;
  font-size: 20px;
}
</style>


<?php
echo nl2br("\n \n");
$com='"';
if($conn->connect_error){
   die("connection failed".$conn->connect_error);
 }
 $sql = "select * from question";
     $result=$conn->query($sql);
     echo "<caption style='color: red'>*Select your answer in YES or NO</caption>";
     

     

     echo "<table id='QuesTable' border='1'>";  

      echo "<th style='background-color: #D3D3D3'>Ques_no</th>";
      echo "<th style='background-color: #D3D3D3'>QUESTION</th>";
      echo "<th id='greenbg'>YES VOTE</th>";
      echo "<th id='redbg'>NO VOTE</th>";
      echo "<th style='background-color: #D3D3D3; display: none';></th>";

      
      

      
     while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
      
      echo "<tr><form action='vote.php' name'vote' method='post'><td id='qid'>".$row['questionId']."</td>";
      echo "<td style='text-align: center'>".$row['questionTxt']."</td>";
      echo "<td style='text-align: center'><input type='radio' name=".$row['questionId'].'r'." id=".$row['questionId']." value='yes' onchange='voteD(".$row['questionId'].",this)'></td>";
      echo "<td style='text-align: center'><input type='radio' name=".$row['questionId'].'r'." id=".$row['questionId']." value='no' onchange='voteD(".$row['questionId'].",this)'></td>";
      
      echo "<td style='text-align: center'><input type='submit' name=".$row['questionId']." value='vote' style='font-weight: 800;' disabled></td></tr>";
      echo "<input type='hidden' name='link' value='".$row['questionId']."'></form>";
     
      
            
   }
   echo "</table>";

   $sql1="select qid from checkx where uid=".$_SESSION['login_user_id'];
   $result=$conn->query($sql1);
   while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
     
  //    echo $row['qid'];
     echo "<script type='text/javascript'>counterCheck(".$rows['qid'].");</script>";
   }
  // echo "final";
?>


<style type="text/css">
  input:hover{
    transform: scale(1.3);
  }

  button:hover{
    transform: scale(1.1);
  }

  #grad {
      
     /* background-color: blue; /* For browsers that do not support gradients */
      background-image: linear-gradient(to right, #F5B7B1, #85C1E9);
      }
</style>

