<?php include("include/header.php");
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

  <h2 class="mb-4">Tableau de bord</h2>
  <h6 class="mb-4">Résumé des réservation</h6>
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>
  <br><br>


  <div class="row ml-4">

    <div class="col-md-6 col-sm-12">
      <div class="card border-light mb-3" style="max-width: 36rem;">
        <div class="card-header  font-weight-bold">Statut des réservations</div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-sm-12">

              <p class="font-weight-bold">Réservations Total</p>
              <p id="event_total_booking">...</p>
              <p class="font-weight-bold">Réservation rejetée</p>
              <p id="event_rejeted_booking">...</p>
              <p class="font-weight-bold">Réservation annulée</p>
              <p id="event_cancelled_booking">...</p>
            </div>
            <div class="col-6">

              <p class="font-weight-bold">Réservation réservée</p>
              <p id="event_booked_booking">...</p>
              <p class="font-weight-bold">Réservation payée</p>
              <p id="event_paid_booking">...</p>
              <p class="font-weight-bold">Réservation vérifiée</p>
              <p id="event_checkedout_booking">...</p>
            </div>
          </div>

        </div>
      </div>
    </div>