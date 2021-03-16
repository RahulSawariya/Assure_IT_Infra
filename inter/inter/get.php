<?php
$con=mysqli_connect("localhost","root","","reg");
    if(!$con)
    {
        die("Unable to connect");
    }
       
 else
 {
    $q2="Select * from register";
    $c1=mysqli_query($con,$q2);

    echo"<center><table border=1 cellpadding=10>";
	echo"<tr>";
	echo"<th>Name";
	echo"<th>Email";
	echo"<th>Mobile";
	
	while($r=mysqli_fetch_array($c1))
	{
		echo"<tr>";
		echo"<td>".$r[0];
		echo"<td>".$r[1];
		echo"<td>".$r[2];
	}
	mysqli_close($con);
 }

 ?>