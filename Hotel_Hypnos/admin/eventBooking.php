<?php include("include/header.php");
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>


<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

  <h2 class="mb-4">Réservation hotel de luxe</h2>




  <!-- Payment Modal -->

  <div class="modal" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Faite votre paiement</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="modal-payment" action="status_functions.php" method="POST" autocomplete="off">


            <label for="eventPaymentType">Choisissez le mode de paiement</label>
            <select name="eventPaymentType" id="eventPaymentType"
              class="form-control custom-select bg-white border-md filter" required>

              <option value="espece">Espèce</option>
              <option value="paypal">Paypal</option>
              <option value="cb">CB</option>
              <option value="cheque">Chèque</option>
            </select>
            <input type="hidden" id="eventBookingId" name="eventBookingId">



        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Payer</button>

        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Details réservation</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card card-margin" id="details">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <br>

  <!-- Filter Drop down  -->
  <div class="float-right filterBy">
    <select name="category" id="eventBookingFilter" class="form-control custom-select bg-white border-md filter">
      <option disabled="" selected="">Filtrer </option>
      <option value="1">Toutes les réservations </option>
      <option value="2">Réservé</option>
      <option value="3">Réservation payée</option>
      <option value="4">Réservation annulée</option>
      <option value="5">Réservation rejetée</option>
      <option value="6">Réservation expirée</option>
    </select>
  </div>


  <!-- table for the display the content  -->
  <div class="container-fluid" id="contentArea">


  </div>


</div>

<script src="js/eventBooking.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>