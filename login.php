<?php
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST, 'Upassword');
if(!empty($username)||!empty($password))
{
	$host = "localhost";
    $uname = "root";
    $pword = "";
    $dbname = "hotels";

	$conn = new mysqli ($host, $uname, $pword, $dbname);
	if(mysqli_connect_error()){
        mysqli_connect_errno().')'. mysqli_connect_errno();
    }
    else{
		$sql = "INSERT INTO log_in (username,Upassword) values ('$username','$password')";
        if($conn->query($sql))
        {
           
           echo "You have successfully loggedin....";
            
        }
        else{
            echo "Your room couldnt be booked. Try again.";
        }
        $conn->close();
	}
}


