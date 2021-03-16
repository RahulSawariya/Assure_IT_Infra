<?php

$con=mysqli_connect("localhost","root","","reg");
    if(!$con)
    {
        die("Unable to connect");
    }
       
 else
 {
    $name2=$_POST['name1'];
    $email2=$_POST['email1'];
    $mobile2=$_POST['mobile1'];
    
        $query="INSERT into register VALUES('$name2','$email2','$mobile2')";
        $c=mysqli_query($con,$query);
        echo "Form Submitted Succesfully";
        mysqli_close($con);
 }
 
?>

