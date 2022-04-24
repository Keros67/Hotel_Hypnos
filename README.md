# Hotel_Hypnos

<?php
 
 include('include/header.php');
 include('validation.php');

 
 ?>
<!-- Navbar-->



<div class="container">
  <div class="row align-items-center my-5">
    <!-- For Demo Purpose -->
    <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
      <img src="assets/picture/icons/logo_hypnos.png" alt="" class="img-fluid mb-3 d-none d-md-block">
      <h1>Connectez vous pour reservez</h1>


      </p>
    </div>

    <!-- Registeration Form -->
    <div class="col-md-3 col-lg-5 ml-auto">
      <div class="login-form">
        <form action="validation.php" method="POST" enctype="multipart/form-data">
          <h2 class="text-center mb-4">S'identifier</h2>
          <?php
                if (isset($_GET["error"])) {
                    echo '<div class="text-danger text-center">' . $_GET["error"] . '</div>';
                }
        ?>
          <div class="form-group mt-3">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="fa fa-user"></span>
                </span>
              </div>
              <input type="text" class="form-control" name="email" placeholder="Email" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="password" class="form-control" name="password" placeholder="Mot de passe"
                required="required">
            </div>
          </div>
          <!-- <div class="clearfix mb-3">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div> -->

          <div class="form-group ">
            <button type="submit" name="user_login" class="btn btn-primary login-btn btn-block">S'identifier</button>
          </div>

        </form>
        <p class="text-center text-muted small">Pas de compte ? <a href="signup.php">Inscrivez-vous ici !</a></p>
      </div>
    </div>
  </div>
</div>



<?php include('include/footer.php')?>
<!-- validation -->

<?php

?>
