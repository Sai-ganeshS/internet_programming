<?php
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$username);

if(!$con)
{
    die("sorry we failed to connect ".mysqli_connect_error());

}
else{
    echo"connection was successfull";
}



?>