<?php
 
 include('include/header.php');

$server="localhost";
$username="root";
$password="root";
$dbname="hotel";
$con = mysqli_connect($server,$username,$password,$dbname);
 
 ?>
<!-- Navbar-->
<?php
require('../include/dbConnect.php');

if(!isset($_SESSION['loggedUserId'])) {
  header('Location:../login.php');
 }

  
$roomTypeId = $_POST['RoomTypeId'];
$query_selectRoom  = "SELECT * FROM room_type WHERE RoomTypeId = '$roomTypeId'";
$result = mysqli_query($con,$query_selectRoom);
while($row = mysqli_fetch_assoc($result)){


?>
<div class="container">
  <div class="row align-items-center my-5">
    <!-- For Demo Purpose -->
    <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
      <img src="../assets/picture/icons/logo_hypnos.png" alt="" class="img-fluid mb-3 d-none d-md-block">
      <h1>Réservez une chambre</h1>


    </div>

    <!-- Booking Form -->
    <div class="col-md-7 col-lg-6 ml-auto">
      <form action="client_functions.php" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="container mb-4">
            <h2 class="text-center">Faite votre réservation</h2>
            <?php
                        if (isset($_GET["error"])) {
                        echo '<div class="text-danger text-center">' . $_GET["error"] . '</div>';
                        }
                        ?>

          </div>

          <input type="hidden" name="roomTypeId" value="<?php echo $roomTypeId ?>" />


          <!--roomType-->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="roomType">Type de chambre</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class='fas fa-door-open'></i>
                </span>
              </div>
              <input id="roomType" type="text" name="roomType" value="<?php echo $row['RoomType'] ?>"
                class="form-control bg-white border-left-0 border-md" required readonly>
            </div>
          </div>

          <!-- roomCost -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="roomCost">Prix de la chambre /jours</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-eur"></i>
                </span>
              </div>
              <input id="roomCost" type="text" value="<?php echo $row['Cost'] ?>" name="roomCost"
                class="form-control bg-white border-left-0 border-md" required readonly>
            </div>
          </div>

          <!-- Email Address -->
          <div class="form-group col-lg-12 mb-4">

            <div class="ml-2">
              <label for="email">Email</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-envelope text-muted"></i>
                </span>
              </div>
              <input id="email" type="email" name="email" placeholder="Email"
                class="form-control bg-white border-left-0 border-md" required>
            </div>
          </div>

          <!-- Phone Number -->
          <div class="form-group col-lg-12 mb-4">

            <div class="ml-2">
              <label for="phoneNumber">Portable</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-phone-square text-muted"></i>
                </span>
              </div>

              <input id="contactno" type="tel" name="contactno" placeholder="Portable"
                class="form-control bg-white border-md border-left-0 pl-3" required>
            </div>
          </div>


          <!-- number of guest -->
          <div class="form-group col-lg-12 mb-4">

            <div class="ml-2">
              <label for="no_of_guest">Nombre de personnes</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="no_of_guest" name="no_of_guest"
                class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="" selected="true" disabled="true">Nombres de personnes</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>

          <!--checkin -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="checkIn">Date d'arrivé</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
              </div>
              <input id="checkIn" type="text" name="checkIn" placeholder="Date d'arrivée" class="form-control bg-white "
                required>
            </div>
          </div>

          <!--checkOut-->
          <div class="form-group col-lg-6 mb-4">
            <div class="ml-2">
              <label for="checkOut">Date de départ</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
              </div>

              <input id="checkOut" type="text" name="checkOut" placeholder="Date de départ"
                class="form-control bg-white " required>
            </div>
          </div>

          <!-- total roomCost -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="roomCost">Prix total</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-eur"></i>
                </span>
              </div>
              <input id="totalCost" type="text" name="totalCost" value="0"
                class="form-control bg-white border-left-0 border-md" required readonly>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="form-group col-lg-12 mx-auto mb-0">
            <button type="submit" class="btn btn-primary btn-block py-2" name="bookRoom">
              <span class="font-weight-bold">Réserver</span>
            </button>
          </div>


        </div>
      </form>
    </div>
  </div>
</div>

<?php          }
                    
?>


<script src="js/dateValidation.js"></script>
<?php include('include/footer.php')?>