<section id="footer">
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark text-white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Connectez-vous avec nous sur les réseaux sociaux: </span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>

        <a href="https://twitter.com/vengade87802870" class="ml-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>

        <a href="https://instagram.com/vengadesh_ks" class="ml-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/vengadesh-ks-8297581b3/" class="ml-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/vengadeshks" class="ml-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="sub-footer">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i><?php echo $general_setting['Name'] ?>
            </h6>
            <p>
              <!-- Description  -->
              <?php echo $general_setting['Description'] ?>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Liens utiles
            </h6>
            <p>
              <a href="#!" class="text-reset">Termes & Conditions</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Politique de confidentialité</a>
            </p>
            <p>
              <a href="client/room.php" class="text-reset">Chambres</a>
            </p>
            <p>
              <a href="client/event.php" class="text-reset">Hotels</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Liens
            </h6>
            <p>
              <a href="about.php" class="text-reset">À propos</a>
            </p>
            <p>
              <a href="service.php" class="text-reset">Services</a>
            </p>
            <p>
              <a href="gallery.php" class="text-reset">Galleries</a>
            </p>
            <p>
              <a href="contact.php" class="text-reset">Contactez-nous</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i><?php echo $general_setting['Address_line1'] ?>,
              <?php echo $general_setting['Address_line2'] ?>,
              <?php echo $general_setting['City'] ?>,
              <?php echo $general_setting['State'] ?>,</p>
            <p>Pays : <?php echo $general_setting['Country'] ?></p>
            <p>Code postal : <?php echo $general_setting['Zip_code'] ?> </p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              <?php echo $general_setting['Email'] ?>
            </p>
            <p><i class="fas fa-phone me-3"></i> <?php echo $general_setting['Phone_number'] ?> </p>
            <p><i class="fas fa-print me-3"></i> <?php echo $general_setting['Telephone_number'] ?> </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
  <!-- Footer -->
</section>


<script src="assets/js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>

</html>