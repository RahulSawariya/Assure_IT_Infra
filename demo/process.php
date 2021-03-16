<?php
$conn = mysqli_connect("localhost","root","","demo");
if(!$conn){
    die("<p>Database is not connecting.</p>");
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo($name);
    //$query = "INSERT INTO sample values('$name','$email','$password')";
    //$query = "INSERT INTO sample values('$name','$email','$password')";
    //if(mysqli_query($conn,$query)){
      //  echo "New Record Inserted Succesfully.";
    //}
    //else{
      //  echo "Error".$query."<br>".mysqli_error($conn);
    //}
}