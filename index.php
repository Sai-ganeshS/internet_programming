<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="exam";


    $con=mysqli_connect($servername,$username,$password,$dbname);
    if(!$con){
        echo "sorry ". mysqli_connect_error() ;
    }
    else{
        echo"connection succuessful";
    }

    $sql="INSERT INTO `login` (`email_name`, `password`) VALUES ('saiganesh78901@gmail.com', '1234567')";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        echo"Data inserted sucuessfully";
    }
    else{
        echo "Data was not inserted";
    }

}














?>