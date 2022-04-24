<?php
 
 include('include/header.php');
 include('register.php');
 
 ?>
<!-- Navbar-->

<div class="container">
  <div class="row align-items-center my-5">
    <!-- For Demo Purpose -->
    <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
      <img src="assets/picture/icons/logo_hypnos.png" alt="" class="img-fluid mb-3 d-none d-md-block">
      <h1>Créer un compte</h1>


      </p>
    </div>

    <!-- Registeration Form -->
    <div class="col-md-7 col-lg-6 ml-auto">
      <form action="register.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
          <div class="container mb-4">
            <div class="picture-container">
              <div class="picture">
                <img src="assets/picture/icons/user.png" class="picture-src" id="wizardPicturePreview" title="">
                <input type="file" id="wizard-picture" class="" name="profileImage" required>
              </div>
              <h6 class="">Choisissez une photo de profile</h6>

            </div>
            <?php
                if (isset($_GET["error"])) {
                    echo '<div class="text-danger text-center">' . $_GET["error"] . '</div>';
                }
                ?>
          </div>


          <!-- First Name -->
          <div class="input-group col-lg-6 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-user text-muted"></i>
              </span>
            </div>
            <input id="firstName" type="text" name="firstname" placeholder="Prénom"
              class="form-control bg-white border-left-0 border-md" required>
          </div>

          <!-- Last Name -->
          <div class="input-group col-lg-6 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-user text-muted"></i>
              </span>
            </div>
            <input id="lastName" type="text" name="lastname" placeholder="Nom"
              class="form-control bg-white border-left-0 border-md" required>
          </div>

          <!-- Email Address -->
          <div class="input-group col-lg-12 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-envelope text-muted"></i>
              </span>
            </div>
            <input id="email" type="email" name="email" placeholder="Email"
              class="form-control bg-white border-left-0 border-md" required>
          </div>

          <!-- Phone Number -->
          <div class="input-group col-lg-12 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-phone-square text-muted"></i>
              </span>
            </div>

            <input id="phoneNumber" type="tel" name="contactno" placeholder=" Portable"
              class="form-control bg-white border-md border-left-0 pl-3" required>
          </div>


          <!-- Job -->
          <div class="input-group col-lg-12 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-black-tie text-muted"></i>
              </span>
            </div>
            <select id="job" name="gender" class="form-control custom-select bg-white border-left-0 border-md" required>
              <option value=""></option>
              <option value="male">Homme</option>
              <option value="female">Femme</option>
            </select>
          </div>

          <!-- Password -->
          <div class="input-group col-lg-6 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-lock text-muted"></i>
              </span>
            </div>
            <input id="password" type="password" name="password" placeholder="Mot de passe"
              class="form-control bg-white border-left-0 border-md" required>
          </div>

          <!-- Password Confirmation -->
          <div class="input-group col-lg-6 mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-lock text-muted"></i>
              </span>
            </div>
            <input id="passwordConfirmation" type="password" name="conformPassword"
              placeholder="Confirmez votre Mot de passe" class="form-control bg-white border-left-0 border-md" required>
          </div>

          <!-- Submit Button -->
          <div class="form-group col-lg-12 mx-auto mb-0">
            <button type="submit" class="btn btn-primary btn-block py-2" name="user_registration">
              <span class="font-weight-bold">Créer votre compte</span>
            </button>
          </div>

          <!-- Divider Text -->
          <!--  <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
            <div class="border-bottom w-100 ml-5"></div>
            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
            <div class="border-bottom w-100 mr-5"></div>
          </div>-->

          <!-- Social Login -->
          <!-- <div class="form-group col-lg-12 mx-auto">
            <a href="#" class="btn btn-danger btn-block py-2 btn-facebook">
              <i class="fa fa-facebook-f mr-2"></i>
              <span class="font-weight-bold">Continue with Google</span>
            </a>
            <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
              <i class="fa fa-twitter mr-2"></i>
              <span class="font-weight-bold">Continue with Facebook</span>
            </a>
          </div>-->

          <!-- Already Registered -->
          <div class="text-center w-100">
            <p class="text-muted font-weight-bold">Déja inscrit ? <a href="login.php"
                class="text-primary ml-2">S'identifier</a></p>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>


<?php include('include/footer.php')?>