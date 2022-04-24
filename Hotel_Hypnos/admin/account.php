<?php 
include("include/header.php");
if(!isset($_SESSION['loggedUserId'])) {
    echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">


  <br>


  <!-- table for the display the content  -->
  <div class="container-fluid " id="contentArea">
    <div class="col-9">

      <h4 class="mb-4 text-center">Détails du compte</h4>

      <div class="accountMessage">

      </div>
      <!-- update New User Form  -->
      <form id="updateUser" method="POST" action="admin_functions.php" enctype="multipart/form-data" autocomplete="off">

        <input type="hidden" id="user_Id" name="updateAccount" value="<?php echo $_SESSION['loggedUserId'];?>">
        <div class="row">
          <div class="container mb-4">
            <div class="picture-container">
              <div class="picture">
                <img class="picture-src" id="updatePicture" title="" />
                <input type="file" id="wizardUpdate-picture" class="" name="profileImage" required>
              </div>
              <h6 class="">Choisissez une image de profile</h6>

            </div>

          </div>



          <!-- Last Name -->
          <div class="input-group col-lg-12 mb-4">
            <div class="ml-2">
              <label for="updatelastName">Prénom</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input id="updatelastName" type="text" name="lastname" placeholder="Prénom"
                class="form-control bg-white border-left-0 border-md" required>
            </div>
          </div>



          <!-- Phone Number -->
          <div class="input-group col-lg-12 mb-4">
            <div class="ml-2">
              <label for="updatephoneNumber">Contact N°</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-phone-square text-muted"></i>
                </span>
              </div>


              <input id="updatephoneNumber" type="tel" name="contactno" placeholder="Portable"
                class="form-control bg-white border-md border-left-0 pl-3" required>
            </div>
          </div>


          <!-- Job -->
          <div class="input-group col-lg-12 mb-4">
            <div class="ml-2">
              <label for="updategender">Genre</label>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="updategender" name="gender"
                class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="">Genre</option>
                <option value="male">M.</option>
                <option value="female">Mme</option>
              </select>
            </div>
          </div>



        </div>

        <div class="form-group col-lg-6 mx-auto mb-0">
          <button id="updateUser" type="submit" class="btn btn-primary btn-block py-2" name="updateUser">
            <span class="font-weight-bold">Sauvegarde</span>
          </button>
        </div>


      </form>
    </div>
    <div class="col-9">
      <div class="passwordMessage mt-4">

      </div>
      <h5 class="mb-4 mt-5 text-center">Changez le mot de passe</h5>
      <form id="change_password" autocomplete="off">
        <input type="hidden" id="userId" name="change_password" value="<?php echo $_SESSION['loggedUserId'];?>">
        <!--old Password -->
        <div class="input-group col-lg-12 mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text bg-white px-4 border-md border-right-0">
              <i class="fa fa-lock text-muted"></i>
            </span>
          </div>
          <input id="oldPassword" type="password" name="oldPassword" placeholder="Ancien mot de passe"
            class="form-control bg-white border-left-0 border-md" required>
        </div>

        <!-- newPassword  -->
        <div class="input-group col-lg-12 mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text bg-white px-4 border-md border-right-0">
              <i class="fa fa-lock text-muted"></i>
            </span>
          </div>
          <input id="newPassword" type="password" name="newPassword" placeholder="Nouveau mot de passe"
            class="form-control bg-white border-left-0 border-md" required>
        </div>

        <div class="form-group col-lg-6 mx-auto mb-0">
          <button id="changePassword" type="submit" class="btn btn-primary btn-block py-2" name="changePassword">
            <span class="font-weight-bold">Changez le mot de passe</span>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- end of container  -->

</div>
<script src="js/account.js" type="text/javascript"></script>


<?php include("include/footer.php"); ?>