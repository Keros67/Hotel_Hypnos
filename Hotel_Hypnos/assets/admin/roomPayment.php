<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

  <h2 class="mb-4">Paiement de réservation de chambre</h2>


  <br>
  <!-- Filter Drop down  -->
  <div class="float-right filterBy">
    <select name="category" id="roomPaymentFilter" class="form-control custom-select bg-white border-md filter">
      <option disabled="" selected="">Filtrer </option>
      <option value="1">Tous</option>
      <option value="2">Espèce</option>
      <option value="3">Paypal</option>
      <option value="4">CB</option>
      <option value="5">Chèque</option>
      <option value="6">Moins de 500$</option>
      <option value="7">Entre 500€ and 1000€</option>
      <option value="8">Entre 1000€ and 1500€</option>
      <option value="9">Au dessus de 1500€</option>
    </select>
  </div>
  <!-- table for the display the content  -->
  <div class="container-fluid" id="contentArea">


  </div>


</div>
<script src="js/roomPayment.js"></script>
<?php include("include/footer.php"); ?>