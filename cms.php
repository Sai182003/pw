<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $heading=$_POST['heading_description'];
    $desc=$_POST['description'];
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
    if($desc && $heading)
    {
        $my->heading="$heading";
        $my->desc="$desc";
        $myJSON=json_encode($my);
    }
    

}