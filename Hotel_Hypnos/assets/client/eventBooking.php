<?php
 
 include('include/header.php');
 include('../include/dbConnect.php');

$server="localhost";
$username="root";
$password="root";
$dbname="hotel";
$con = mysqli_connect($server,$username,$password,$dbname);
 
 ?>
<!-- Navbar-->
<?php

if(!isset($_SESSION['loggedUserId'])) {
    header('Location:../login.php');
}

$eventTypeId = $_POST['eventTypeId'];
$query_selectEvent  = "SELECT * FROM event_type WHERE EventTypeId = '$eventTypeId'";
$result = mysqli_query($con,$query_selectEvent);
while($row = mysqli_fetch_assoc($result)){


?>
<div class="container">
  <div class="row align-items-center my-5">
    <!-- For Demo Purpose -->
    <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
      <img src="../assets/picture/icons/logo_hypnos.png" alt="" class="img-fluid mb-3 d-none d-md-block">
      <h1>Réservez un hotel</h1>


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

          <input type="hidden" name="eventTypeId" value="<?php echo $eventTypeId ?>" />


          <!--eventType-->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="eventType">Hotels</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class='fas fa-door-open'></i>
                </span>
              </div>
              <input id="eventType" type="text" name="eventType" value="<?php echo $row['EventType'] ?>"
                class="form-control bg-white border-left-0 border-md" required readonly>
            </div>
          </div>

          <!-- eventCost -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="eventCost">Prix de location</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-eur"></i>
                </span>
              </div>
              <input id="eventCost" type="text" value="<?php echo $row['Cost'] ?>" name="eventCost"
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
              <label for="no_of_guest">Nombres de personnes</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="no_of_guest" name="no_of_guest"
                class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="" selected="true" disabled="true">Choisissez le Nombres de personnes</option>
                <option value="2-6">2-6</option>
                <option value="6-10">6-10</option>
                <option value="10-15">10-15</option>
                <option value="15-20">15-20</option>
              </select>
            </div>
          </div>

          <!--checkin -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="eventDate">Date d'arrivé</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
              </div>
              <input id="eventDate" type="text" name="eventDate" placeholder="Check-In Data"
                class="form-control bg-white " required>
            </div>
          </div>

          <!--Time -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="eventTime">Herue d'arrivé</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
              </div>
              <input id="eventTime" type="text" name="eventTime" placeholder="Event Time" class="form-control bg-white "
                required>
            </div>
          </div>




          <!-- Timing -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="total_hours">Nombres de jours</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="total_hours" name="total_hours"
                class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="" selected="true" disabled="true">Choisissez le nombre de jours</option>
                <option value="4">4 jours</option>
                <option value="8">8 jours</option>
                <option value="16">16 jours</option>
                <option value="24">24 jours</option>
              </select>
            </div>
          </div>

          <!-- total eventCost -->
          <div class="form-group col-lg-6 mb-4">

            <div class="ml-2">
              <label for="totalCost">Prix total</label>
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
            <button type="submit" class="btn btn-primary btn-block py-2" name="bookEvent">
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