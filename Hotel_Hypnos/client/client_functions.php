<?php

include("../include/functions.php");

$server="localhost";
$username="root";
$password="root";
$dbname="hotel";
$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['bookRoom'])){

    $roomTypeId = $_POST['roomTypeId'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $no_of_guest = $_POST['no_of_guest'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $totalCost = $_POST['totalCost'];
    $userId = $_SESSION['loggedUserId'];

    $checkIn = strtotime($checkIn);
    $checkIn = date('Y-m-d',$checkIn); 
    
    $checkOut = strtotime($checkOut);
    $checkOut = date('Y-m-d',$checkOut);

    $query_roomType = "SELECT * FROM room_type WHERE RoomTypeId = '$roomTypeId' AND Status = 'active' ORDER BY RoomId";
    $roomType  = mysqli_query($con,$query_roomType);
    if(mysqli_num_rows($roomType)>0)
{  
  while($row=mysqli_fetch_assoc($roomType))
{
      $flag = false;
      $ID=$row['RoomId'];
      if ($row['Booking_status']=='Available')
      { 
           $flag =true;
           $reg="INSERT into room_booking (RoomId,User_id,Date,CheckIn,CheckOut,NoOfGuest,Amount,Email,Phone_number)
            values('$ID','$userId',curdate(),'$checkIn','$checkOut','$no_of_guest','$totalCost','$email','$contactno') ";

           $update_query = "UPDATE room_list SET Booking_status = 'Booked' WHERE RoomId = '$ID'";
            
           mysqli_query($con,$update_query);
           mysqli_query($con,$reg);
           break ; 
      }
      
  }
    if ($flag==false)
    {
       
        echo "<script>alert('Oops! Chambre non disponible..'); window.location.href='room.php'; </script>";
        
    }
      else {
 
        echo "<script>alert('Réservation effectuée..'); window.location.href='mybooking.php'; </script>";
}
     
}
else {
    echo "<script>alert('Oops! Chambre non disponible'); window.location.href='room.php'; </script>";
}


}

if(isset($_POST['bookEvent'])){

    $eventTypeId = $_POST['eventTypeId'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $no_of_guest = $_POST['no_of_guest'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];
    $eventTime = date("H:i", strtotime($eventTime));
    $total_hours = $_POST['total_hours'];
    $totalCost = $_POST['totalCost'];
    $userId = $_SESSION['loggedUserId'];

    $eventDate = strtotime($eventDate);
    $eventDate = date('Y-m-d',$eventDate); 
    

    $query_eventType = "SELECT * FROM event_list WHERE EventTypeId = '$eventTypeId' AND Status = 'active' ORDER BY EventId";
    $Type  = mysqli_query($con,$query_eventType);
    if(mysqli_num_rows($Type)>0)
{  
  while($row=mysqli_fetch_assoc($Type))
{
      $flag = false;
      $ID=$row['EventId'];
      if ($row['Booking_status']=='Available')
      { 
          
           $reg="INSERT into event_booking (EventId,User_id,Date,Event_date,NoOfGuest,EventTime,Package,Amount,Email,Phone_number)
            values('$ID','$userId',curdate(),'$eventDate','$no_of_guest','$eventTime','$total_hours','$totalCost','$email','$contactno') ";

           $update_query = "UPDATE event_list SET Booking_status = 'Booked' where EventId = '$ID'";
           
           if(mysqli_query($con,$update_query) &&  mysqli_query($con,$reg)){
             $flag =true;
           }
           break ; 
      }
      
  }
    if ($flag==false)
    {
       
        echo "<script>alert('Oops! Chambre non disponible..'); window.location.href='event.php'; </script>";
        
    }
      else {
 
        echo "<script>alert('Réservation effectuée..');window.location.href='mybooking.php'; </script>";

}
     
}
else {
    echo "<script>alert('Oops! Chambre non disponible'); window.location.href='room.php'; </script>";
}


}

// ----------------------------------------- Account Action -----------------------------------------------
//update the datals of user table

if(isset($_POST['updateAccount'])){
             
  $user_id = mysqli_real_escape_string($con, $_POST['updateAccount']);
  $firstname = mysqli_real_escape_string($con, $_POST['firstName']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $contactno = mysqli_real_escape_string($con, $_POST['contactno']);  
  $gender = mysqli_real_escape_string($con, $_POST['gender']);

  // profile image upload
  $profileImageName = $_FILES["profileImage"]["name"];
  $tempname = $_FILES["profileImage"]["tmp_name"];   
  $folder = "../assets/picture/profiles/".$profileImageName;
       

  // $re_pass = base64_encode(mysqli_real_escape_string($conn, $_POST['reg_pass']));

  $User_details="SELECT * FROM users_details WHERE (Firstname='$firstname' OR Email='$email') AND UserId <> ' $user_id '";
  $result=mysqli_query($con,$User_details)or die("can't fetch");
  $num=mysqli_num_rows($result);


  $sendData = array();
 
  
 if ($firstname == "admin") {
      $error="Utilisateur invalid (Vous ne pouvez pa utiliser ce nom d'utilisateur!)";
      $sendData = array(
          "msg"=>"",
          "error"=>$error
      );
      echo json_encode($sendData);
  } 
 else if ($num>0) {
      $error="Nom ou email déjà utilisé!";
      $sendData = array(
          "msg"=>"",
          "error"=>$error
      );
      echo json_encode($sendData);
  } else {

                  // query validation
                  $update="UPDATE users_details SET  FirstName='$firstname', LastName ='$lastname',Email='$email',ContactNo='$contactno',Gender='$gender',ProfileImage='$profileImageName' WHERE UserId = '$user_id'" ;


                  if(mysqli_query($con,$update))
                  {
                      if(!move_uploaded_file($tempname, $folder)){
                      //if(false){
                          $error ="Erreur ...! Essayez plus tard";
                          $sendData = array(
                              "msg"=>"",
                              "error"=>$error
                          );
                          echo json_encode($sendData);
                      }else{
                        $message = "Données mise à jour avec succès !";!
                        // message("user.php","User Added");
                        $sendData = array(
                          "msg"=>$message,
                          "error"=>""
                      );
                      echo json_encode($sendData);
                      }
                  }
                  else{
                        $error ="Erreur ...! Essayez plus tard";
                        $sendData = array(
                          "msg"=>"",
                          "error"=>$error
                      );
                      echo json_encode($sendData);

                }

           
      
 }

}

// -------------------------------- Change password -----------------------------------

if(isset($_POST["oldPassword"])){
  $old = $_POST['oldPassword'];
  $new = $_POST['newPassword'];
  $ID = $_POST['change_password'];

  $Q = "SELECT * FROM users_details WHERE UserId = '$ID'";
  $res = mysqli_query($con,$Q);
  $row = mysqli_fetch_assoc($res);
  $num = mysqli_num_rows($res);

 
  $sendData = array();
  if($num>0){

      if($old == $row['Password']){
          $Q_update = "UPDATE users_details us SET us.Password = '$new' WHERE UserId = '$ID'";
          $result = mysqli_query($con,$Q_update);
          $msg = "Mot de passe changé avec succès !";
          $sendData = array(
              "msg"=>$msg,
              "error"=>""
          );
      }else{
          $error ="Oops! Il y a une erreur dans l'ancien mot de passe !";
          $sendData = array(
            "msg"=>"",
            "error"=>$error
        );
      }
  }else{

      $error ="Utilisateur invalid ";
      $sendData = array(
        "msg"=>"",
        "error"=>$error
    );
  }
echo json_encode($sendData);
}
?>