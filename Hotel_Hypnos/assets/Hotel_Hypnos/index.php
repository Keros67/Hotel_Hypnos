<?php
include('include/header.php');

$server="localhost";
$username="root";
$password="root";
$dbname="hotel";
$con = mysqli_connect($server,$username,$password,$dbname);

$SQL = "SELECT * FROM general_settings"; 

$query=mysqli_query($con,$SQL);
$general_setting=mysqli_fetch_assoc($query);
?>

<!-- Carousel  -->

<section class="carousel-section" id="slider">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/picture/cesourel/B.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-5">Les meilleurs effets de lumière.</h1>
          <p>La qualité de l'ensemble de l'éclairage et son effet sur l'ambiance
            dépend souvent de la relation entre la clé et les lumières de remplissage...</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="assets/picture/cesourel/location.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-5 text-dark">Les routes et le système de transport bien connectés </h1>
          <p class="text-dark">Accessibilité facile aux points commerciaux et aux zones clés de la ville avec le
            meilleur
            parking
            de la région...</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="assets/picture/cesourel/Parking.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-5 text-dark">Capacité optimale et emplacement pratique des places de stationnement </h1>
          <p class="text-dark">Un stationnement bien conçu et bien entretenu améliore l'attrait extérieur
            de
            l'établissement...</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="assets/picture/cesourel/Reception.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-5">Un accueil exceptionel, il crée un sentiment d'attention et donne un sentiment
            de
            plaisir</h1>
          <p>Accessibilité facile des points commerciaux et aux zones clés de la ville avec le meilleur parking.</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="assets/picture/cesourel/Service.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-5 text-dark"> Les clients peuvent manger et boire dans leur propre chambre privée à l'hôtel
          </h1>
          <p class="text-dark">Nous offrons des coupons et des réductions sur les attractions locales...</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="assets/picture/cesourel/lighting.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-5">Les meilleurs effets de lumière </h1>
          <p>La qualité de l'ensemble de l'éclairage et son effet sur l'ambiance
            dépend souvent de la relation entre la clé et les lumières de remplissage...</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="En savoir plus..." data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Retour</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="En savoir plus..." data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
</section>


<!-- Page Content -->

<section class="py-5 white-section" id="introduction">
  <div class="container">
    <h1 class="display-4 title"><?php echo $general_setting['Name'] ?></h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>

  <div class="container">

    <h3>Lorem</h3>

    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci
      quo obcaecati dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur
      veritatis, quos commodi.
      lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati dolorem
      numquam. lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati
      dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur veritatis,
      quos commodi.


    </p>

    <p>
    <blockquote class="blockquote">Lorem ipsum</blockquote>

    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci
    quo obcaecati dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur
    veritatis, quos commodi.
    lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati dolorem
    numquam. lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati
    dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur veritatis,
    quos commodi.

    </p>

    <p>
    <blockquote class="blockquote">Lorem ipsum</blockquote>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci
    quo obcaecati dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur
    veritatis, quos commodi.
    lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati dolorem
    numquam. lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati
    dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur veritatis,
    quos commodi.

    </p>

  </div>
</section>

<!--Hotel Features-->

<section class="py-5 colored-section" id="grid">

  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-4 cd-lg-4">
        <div class="box container text-center">
          <img class='img mb-4' src='assets/picture/common/buffet.jpg' alt='Image Error' width='350px' height='200px'>
          <center>
            <h3>PETIT DEJEUNER</h3>
          </center>
          <p class="mb-4">Découvrez des escapades de week-end exquises dans le confort de votre propre ville. Profitez
            du petit-déjeuner,
            Wi-Fi, happy hours, réductions sur les restaurants et le spa, et plus encore.</p>

        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 cd-lg-4">
        <div class="box container text-center">
          <img class='img mb-4' src='assets/picture/common/chambre.jpg' alt='Image Error' width='350px' height='200px'>
          <center>
            <h3>CHAMBRE AGREABLE</h3>
          </center>
          <p class="mb-4">Avec 506 chambres, 78 appartements de service luxueusement aménagés et 16 suites somptueuses
            qui
            sont l'incarnation de la grâce.</p>

        </div>
      </div>

      <div class="col-xs-12  col-sm-6 col-md-4 cd-lg-4">
        <div class="box container text-center">
          <img class='img mb-4' src='assets/picture/common/spa.jpg' alt='Image Error' width='350px' height='200px'>
          <center>
            <h2>GASTRONOMIE</h2>
          </center>
          <p class="mb-4">Dix destinations gastronomiques distinctes proposant une cuisine locale et internationale
            ainsi que certaines des
            les boissons les plus appréciées et les plus prisées au monde.</p>

        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-xs-12  col-sm-6 col-md-4 cd-lg-4">
        <div class="box container text-center">
          <img class='img mb-4' src='assets/picture/common/dining.jpg' alt='Image Error' width='350px' height='200px'>

          <center>
            <h2>BIEN-ÊTRE</h2>
          </center>
          <p class="mb-4">Incarnant notre engagement envers le bien-être holistique, la chaine hotel Hypnos propose des
            installations qui offrent
            des options plus saines pour un meilleur séjour.</p>

        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 cd-lg-4">
        <div class="box container text-center">
          <img class='img mb-4' src='assets/picture/common/suits.jpg' alt='Image Error' width='350px' height='200px'>
          <center>
            <h2>PAUSE COURTE</h2>
          </center>
          <p class="mb-4">Capturez toute une vie de bons souvenirs. Comprend le Wi-Fi, le petit-déjeuner et plus encore
          </p>

        </div>
      </div>

      <div class="col-xs-12  col-sm-6 col-md-4 cd-lg-4">
        <div class="box container text-center">
          <img class='img mb-4' src='assets/picture/common/away.jpg' alt='Image Error' width='350px' height='200px'>
          <center>
            <h2>SEJOUR EXCEPTIONEL</h2>
          </center>
          <p class="mb-4">Valeur exceptionnelle pour une expérience de sejour avec transferts aéroport,
            Wi-Fi, petit-déjeuner
            et plus.</p>

        </div>
      </div>

    </div>



</section>




<section class="white-section" id="feature">
  <div class="row featurette m-5">
    <div class="col-md-7 container">
      <h1 class="featurette-heading display-5">Lorem ipsum dolor. <span class="text-muted lead">Lorem ipsum</span></h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci
        quo obcaecati dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem
        pariatur
        veritatis, quos commodi.
        lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati dolorem
        numquam. lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam minus non, quam adipisci quo obcaecati
        dolorem numquam aliquid esse assumenda. Molestias nulla optio consequatur laudantium quidem pariatur veritatis,
        quos commodi.
      </p>
    </div>
    <div class="col-md-5 ">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
        style="width: 500px; height: 400px;" src="assets/picture/service/space.jpg" data-holder-rendered="true">
    </div>
  </div>
</section>

<!-- Testimonials -->


<section class="colored-section pt-3" id="testiminoal-rooms">

  <div class="container my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top d-flex justify-content-center">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating ml-5" href="#multi-item-example" data-slide="next"><i
            class="fas fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>

      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <br>
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="col-md-3" style="float:left">
            <div class="card mb-2 ">
              <img class="card-img-top" src="assets/picture/common/away.jpg" alt="Card image cap" height="180"
                width="50">
              <div class="card-body">
                <h4 class="card-title">Séjour exceptionel</h4>
                <p class="card-text">Valeur exceptionnelle pour une expérience exceptionnelle avec Wi-Fi, petit-déjeuner
                  et plus encore.</p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/picture/common/suits.jpg" alt="Card image cap" height="180"
                width="50">
              <div class="card-body">
                <h4 class="card-title">PAUSE COURTE</h4>
                <p class="card-text">Capturez toute une vie de bons souvenirs. Comprend le Wi-Fi, le petit-déjeuner et
                  plus encore</p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2"> <img class="card-img-top" src="assets/picture/common/dining.jpg"
                alt="Card image cap" height="180" width="50">
              <div class="card-body">
                <h4 class="card-title">Bien-être</h4>
                <p class="card-text">Incarnant notre engagement envers le bien-être holistique, la chaine hotel Hypnos
                  propose des installations qui offrent des options plus saines pour un meilleur séjour</p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/picture/common/accomadation.jpg" alt="Card image cap" height="180"
                width="50">
              <div class="card-body">
                <h4 class="card-title">Logement</h4>
                <p class="card-text"> Des appartements qui sont l'incarnation de la grâce et du style indiens
                </p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                alt="Card image cap" height="180" width="50">
              <div class="card-body">
                <h4 class="card-title">Escape en ville</h4>
                <p class="card-text">Découvrez des escapades de week-end exquises dans le confort de votre propre ville.
                  Profitez
                  déjeuner,
                  économies sur la restauration et le spa, et plus encore</p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/picture/common/events.jpeg" alt="Card image cap" height="180"
                width="50">
              <div class="card-body">
                <h4 class="card-title">Conférence</h4>
                <p class="card-text">Dix destinations gastronomiques distinctes proposant des plats indiens et
                  internationaux
                  cuisine accompagnée de boissons appréciées et prisées</p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/picture/common/wedding.jpg" alt="Card image cap" height="180"
                width="50">
              <div class="card-body">
                <h4 class="card-title">Mariage</h4>
                <p class="card-text">Imaginez votre mariage transformez-le en
                  un événement extraordinaire dans nos salles dédiées</p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/picture/common/meeting.jpeg" alt="Card image cap" height="180"
                width="50">
              <div class="card-body">
                <h4 class="card-title">Réunion</h4>
                <p class="card-text">Nos salles de réunion sont la combinaison parfaite
                  d'équipements spatiaux et audiovisuels
                </p>
                <a class="btn btn-primary">En savoir plus...</a>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->



      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
</section>

<section id="contact" class="white-section">
  <div class="container-xl mb-5 p-5">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="message"></div>
        <div class="contact-form">
          <h1>Contactez-nous</h1>
          <p class="hint-text">Veuillez nous envoyer un message si vous avez des questions.</p>
          <form id="contact-form" action="functions.php" method="post" autocomplete="off">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputFirstName">Prénom</label>
                  <input type="text" class="form-control" id="FirstName" name="FirstName" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputLastName">Prénom</label>
                  <input type="text" class="form-control" id="LastName" name="LastName" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="Email" name="Email" required>
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea class="form-control" id="Message" name="Message" rows="5" required></textarea>
            </div>
            <En savoir plus... type="submit" class="btn btn-primary" name="contact"> Envoyez </En savoir plus...>
          </form>
        </div>
      </div>
    </div>
</section>
<script>
$(document).ready(function() {
  $('#contact-form').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: "functions.php",
      type: "POST",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data) {
        console.log("data");
        console.log(data);
        var json = JSON.parse(data);
        if (json['error'] != "") {
          $('.message').html(`<div class="alert alert-danger" role="alert"> ${json['error']}  </div>`);
          $('#contact-form')[0].reset();
        } else {
          $('.message').html(`<div class="alert alert-success" role="alert"> ${json['msg']}  </div>`);
          $('#contact-form')[0].reset();
        }


      },
      error: function(data) {
        console.log("error");
        console.log(data);
      }
    });
  })
})
</script>


<?php include('include/footer.php') ?>