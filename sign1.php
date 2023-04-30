<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $name=$_POST['username'];
    $email=$_POST['email_id'];
    $pass=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    
$servername="localhost";
$username="root";
$password="";
$database="event";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
   echo "successful";
}
else{
     echo "not created";
}
$sql="INSERT INTO login_details (user_name,password,phonenumber,email_id) VALUES ('$name','$pass','$phonenumber','$email')";
$result=mysqli_query($conn,$sql);
if($result)
{
 echo "Successful";
}
else{
 echo "Not successfull";
}
}
?>