<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
   $event_id=$_POST['name'];
      
$servername="localhost";
$username="root";
$password="";
$database="event";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
   
  echo "succesfull created data base";
}
else{
     echo "not created";
}
$sql="SELECT COUNT(event_id) AS Total FROM events ";
$statement = $conn->query($sql);
foreach($statement as $row){
    echo $row["Total"];
}

// if($result=mysqli_query($conn,$sql))
// {
//     echo $sql;   
// }
// else{
//  echo "Not successfull";
// }
 }
?>