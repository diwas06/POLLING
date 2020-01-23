<?php
//echo " here all Questions can be viewed testing";
include("../config.php");
?>
<html><button onclick="window.location.href = 'view_all.php';">VIEW ALL</button>
<button onclick="window.location.href = '../welcome.php';">HOME</button>
<script type="text/javascript">
  
  function status()
  {
    //  alert("checking status count");
      var checkboxes=document.getElementsByName('checkbox');
    //  alert(checkboxes.length);
      var count=0;
      for(var i=0; i<checkboxes.length;i++)
        if(checkboxes[i].checked)
          count=count+1;
        
      if(count>0)
        document.getElementById('delete').disabled=false;
      else
        document.getElementById('delete').disabled=true;



  }

  function checkAll(item)
  {
    //alert("check");
    
    var checkboxes=document.getElementsByName('checkbox[]');
    

    for(var i=0;i<checkboxes.length;i++)
      checkboxes[i].checked=item.checked;
    status();   
  }
  
</script>
</html>
<?php
echo nl2br("\n \n");
$com='"';
if($conn->connect_error){
   die("connection failed".$conn->connect_error);
 }
 $sql = "select * from question order by noCOunt DESC ,questionId ASC";
     $result=$conn->query($sql);
   //  echo "<caption>sample caption</caption>";
     echo "<button onclick=".$com."window.location.href = 'sortY.php';".$com." id='yes' >sort by yes</button>";
     echo "<button onclick=".$com."window.location.href = 'sortN.php';".$com." id='no' disabled>sort by no</button>";
     echo "<form action='delete.php' method='post' name='view'>";

     echo"<input type='submit' value='DELETE' name='DELETE' style='float: right' id='delete' disabled>";

    // echo "search by name---by no----sorted yes%----sorted no %";
     echo "<table id='QuesTable' border='1'>";  

      echo "<th style='background-color: #D3D3D3'><input type='checkbox' id='checkboxsr' name='checkbox' class='checkbox' onchange='checkAll(this)'/></th>";
      echo "<th style='background-color: #D3D3D3'>Ques_no</th>";
      echo "<th style='background-color: #D3D3D3'>QUESTION</th>";
      echo "<th id='greenbg'>YES COUNT</th>";
      echo "<th id='redbg'>NO COUNT</th>";
      echo "<th style='background-color:blue'>TOTAL</th>";
      echo "<th style='background-color: #D3D3D3'>YES %</th>";

      
      

      
     while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
      echo "<tr><td><input value=".$row['questionId']." name='checkbox[]' id='checkboxjr' type='checkbox' onchange=".$com."document.getElementById('delete').disabled = !this.checked".$com.";/></td>";
      echo "<td>".$row['questionId']."</td>";
      echo "<td style='text-align: center'>".$row['questionTxt']."</td>";
      echo "<td style='text-align: center'>".$row['yesCount']."</td>";
      echo "<td style='text-align: center'>".$row['noCount']."</td>";
      $total=$row['yesCount']+$row['noCount'];
      echo "<td style='text-align: center'>".$total."</td>";
      if($total!=0)
      $per=($row['yesCount']/$total)*100;
      else
        $per=0;

      $per=sprintf('%0.2f',$per);
      if($per<30)
        $stl='redbg';
      else if($per<60)
        $stl='yellowbg';
      else
        $stl='greenbg';

      echo "<td id='".$stl."'>".$per."</td>";
      $com='"';
      $tt="window.location.href = 'delete.php';";
     // echo "<td><button onclick=".$com.$tt.$com.">delete</button></td>";
      
      echo "<p id='msg'></p>";
      
            
   }
   echo "</table>";
   echo "</form>";
?>



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

body {
          background-image: url('../pics/25i.jpg');   background-repeat: no-repeat;  background-size: 100% 100%;
          background-attachment: fixed;
  }

</style>
