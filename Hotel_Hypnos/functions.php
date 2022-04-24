<?php 
include("include/dbConnect.php");

if(isset($_POST['Message'])){
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $email = $_POST['Email'];
    $msg = $_POST['Message'];
    $insert_query = "INSERT INTO contact(FirstName,LastName,Email,Message) VALUES('$fname','$lname','$email','$msg')";
    $sendData = array();
    if( mysqli_query($con,$insert_query)){
        $mesg="Merci pour vore retour !";
        $sendData = array(
            "msg"=>$mesg,
            "error"=>""
        );
    }else{
        $error="Une erreur est survenue... essayez plus tard !";
        $sendData = array(
            "msg"=>"",
            "error"=>$error
        );
    }
    
 
    echo json_encode($sendData);
}


?>