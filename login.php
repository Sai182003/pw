<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $name=$_POST['username'];
    $pass=$_POST['password'];
    
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
$sql="SELECT * from login_details where user_name='$name' and password='$pass'";
if($result=mysqli_query($conn,$sql))
{
   session_start();
   ?>
   <script>setTimeout(function(){
    window.location = "home.html";
  },1000);</script>
  <?php
}

else{
 echo "Not successfull";
}
}
?>