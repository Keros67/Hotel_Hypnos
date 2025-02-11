<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

  <h2 class="mb-4">Chambre</h2>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-dark" id="addRoomBtn">
    + Ajouter une nouvelle chambre
  </button>


  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter une chambre</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="admin_functions.php" method="POST" id="modal-addRoom" autocomplete="off">


            <?php
      $query_roomType = "SELECT * FROM room_type WHERE Status = 'active' ORDER BY RoomTypeId";
      $result = mysqli_query($con,$query_roomType);

      ?>

            <div class="input-group col-lg-11 ml-3 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="roomType" name="roomType" class="form-control custom-select bg-white border-left-0 border-md"
                required>
                <option disabled="" selected="">choisir un type de chambre</option>
                <?php 
                    while ($row = mysqli_fetch_array($result))
                    {
                    echo "<option value='".$row['RoomTypeId']."'>".$row['RoomType']."</option>";
                    }
                    ?>
              </select>
            </div>



            <!-- Room Number -->
            <div class="input-group col-lg-11 ml-3 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input id="roomNumber" type="text" name="roomNumber" placeholder="Numero de chambre"
                class="form-control bg-white border-left-0 border-md" required>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Ajouter</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>


  <!--Edit Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les détails</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="admin_functions.php" method="POST" id="modal-updateRoom" autocomplete="off">


            <?php
      $query_roomType = "select * from room_type where Status = 'active' order by RoomTypeId";
      $result = mysqli_query($con,$query_roomType);

      ?>

            <div class="input-group col-lg-11 ml-3 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="editRoomType" name="editRoomType"
                class="form-control custom-select bg-white border-left-0 border-md" required>
                <option disabled="" selected="">choisir un type de chambre</option>
                <?php 
                    while ($row = mysqli_fetch_array($result))
                    {
                    echo "<option value='".$row['RoomTypeId']."'>".$row['RoomType']."</option>";
                    }
                    ?>
              </select>
            </div>



            <!-- Room Number -->
            <div class="input-group col-lg-11 ml-3 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input id="editRoomNumber" type="text" name="editRoomNumber" placeholder="Numéro de chambre"
                class="form-control bg-white border-left-0 border-md" required>
            </div>

            <div class="input-group col-lg-11 ml-3 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="editStatus" name="editStatus"
                class="form-control custom-select bg-white border-left-0 border-md" required>
                <option disabled="" selected="">choisir un statut</option>
                <option value="active">Actif</option>
                <option value="in-active">Inactif</option>
              </select>
            </div>
            <!-- for getting the id when the form is submitted  -->
            <input type="hidden" id="updateRoomId" name="updateRoomId">

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Sauvegarder</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <br>
  <!-- Filter Drop down  -->
  <div class="float-right filterBy">
    <select name="category" id="roomFilter" class="form-control custom-select bg-white border-md filter">
      <option disabled="" selected="">Filtrer </option>
      <option value="">Tous</option>
      <option value="active">Actif</option>
      <option value="in-active">Inactif</option>
    </select>
  </div>
  <!-- table for the display the content  -->
  <div class="container-fluid" id="contentArea">


  </div>


</div>

<script src="js/room_function.js"></script>
<?php include("include/footer.php"); ?>