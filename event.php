<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $event=$_POST['name'];
    $hostid=$_POST['hostid'];
    $domain=$_POST['domain'];
    $ename=$_POST['ename'];
    $tag=$_POST['tag'];
    $date=$_POST['date'];
    $entryfee=$_POST['entryfee'];
    $image=$_POST['image'];
    $joinlink=$_POST['joinlink'];
    $contactemail=$_POST['contactemail'];
    $socialmedialink=$_POST['socialmedialink'];
    $orgname=$_POST['orgname'];
    $location=$_POST['location'];
    $mode=$_POST['mode'];
    $desc=$_POST['desc'];

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
    $sql="INSERT INTO events (event_id,host_id,event_domain,event_name,tag_line,date_of_event,entry_fees,image,join_link,contact_email,social_media_link,org_name,location,event_mode,description) VALUES ('$event','$hostid','$domain','$ename','$tag','$date','$entryfee','$image','$joinlink','$contactemail','$socialmedialink','$orgname','$location','$mode','$desc')";
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