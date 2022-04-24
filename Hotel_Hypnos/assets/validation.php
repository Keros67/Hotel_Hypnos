<?php

include('include/functions.php');

$server="localhost";
$username="root";
$password="root";
$dbname="hotel";
$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['user_login'])){

    $email=$_POST['email'];
    $password=$_REQUEST['password'];
    $select_user="SELECT * FROM  users_details WHERE Email='$email' && Password ='$password'";
    $result=mysqli_query($con,$select_user) or die ('failed to query');
    $row=mysqli_fetch_array($result);
    
    if(($row['Email']==$email) && ($row['Password']==$password))
    {
        if($row['Email']=="craig03@hotmail.fr"){
            header("Location:admin/dashboard.php?");
        } 
        else 
        {
            //header("Location:index.php?");
            header("Location:client/mybooking.php");
        }

        $_SESSION['loggedUserName']=$row['FirstName'];
        $_SESSION['loggedUserId']=$row['UserId'];
       
        
            
    }
    else{
        $error="Invalid Username and Password !";
        error('login.php',$error);
    } 
}
?>