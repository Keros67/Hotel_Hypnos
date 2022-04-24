<?php 

include('include/header.php');
if(!isset($_SESSION['loggedUserId'])) {
    header('Location:../login.php');
}
   
?>

<section id="roomType" class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-2">
      <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
        <h2 class="my-3">Hotels libres</h2>
      </div>
    </div>

    <!-- Filter Drop down  -->
    <div class="float-right ">
      <select name="category" id="eventFilter" class="form-control custom-select bg-white border-md filter">
        <option disabled="" selected="">Filtrer </option>
        <option value="1">Tous</option>
        <option value="2">Moins de 1500€</option>
        <option value="3">Entre 1500€ & 2000€</option>
        <option value="4">Entre 2000€ & 2500€</option>
        <option value="5">Plus de 2500€</option>
      </select>
    </div>

    <br>
    <br>
    <br>
    <div class="row" id="contentArea">


    </div>

  </div>
</section>

<script src="js/eventType.js"></script>

<?php include('include/footer.php')?>