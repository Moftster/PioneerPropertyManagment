<?php  include('partials/header.php'); ?>
  <body>

    <div class="container">

      <!-- SERVICES -->

      <div id="services" class="container home-section">
        <div style="margin-top: 100px;" class="row">
          <div class="col-lg-4">
            <img class="icons-center" src="images/contract.png" width="140" height="140">
            <h2 class="text-center">Lettings</h2>
            <p class="text-center"> Whether you're a landlord in need of advice or a tenant searching for a rental property we can help.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="icons-center" src="images/house.png" width="140" height="140">
            <h2 class="text-center">Management</h2>
            <p class="text-center">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img img class="icons-center" src="images/wrench.png" width="140" height="140">
            <h2 class="text-center">Maintenance</h2>
            <p class="text-center">Donec sed odio dui. Dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>


    <!-- ABOUT -->

    <div id="about" class="home-section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="slides first-slide" src="images/london-sky-2.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="banner-text">Example headline.</h1>
                <p class="banner-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="slides second-slide" src="images/interior.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="banner-text">Another example headline.</h1>
                <p class="banner-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="slides third-slide" src="images/more-houses-3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="banner-text">One more for good measure.</h1>
                <p class="banner-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <hr>

      <div class="row featurette">
        <div class="col-md-5 order-md-2">
          <img class="featurette-image img-fluid mx-auto" src="images/mews.jpg" alt="Mews">
        </div>
         <div class="col-md-7 order-md-1">
           <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
           <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
         </div>

       </div>
     </div>


       <!--CONTACT -->
       <div id="contact" class="home-section">

       <div class="row featurette">
         <div class="col-md-7">
              <!--The div element for the map -->
              <div id="map"></div>
              <script>
          // Initialize and add the map
          function initMap() {
            // The location of Uluru
            var pioneer = {lat: 51.457595, lng: -0.120814};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 16, center: pioneer});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: pioneer, map: map});
          }
              </script>
              <!--Load the API from the specified URL
              * The async attribute allows the browser to render the page while the API loads
              * The key parameter will contain your own API key (which is not needed for this tutorial)
              * The callback parameter executes the initMap() function
              -->
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCChCsAsT8MfQsp-w8mfjZDGOVolzAYr6k&callback=initMap">
              </script>

              <script src="/api/js/googlemaps.js"></script>
             </div>
          <div class="col-md-4">
            <dl>
            <dd>
                <p>
                  <strong>Pioneer Property Management Ltd<br></strong>
                  2A Horsford Road<br>
                  London<br>
                  SW2 2BN<br>
                </p>
            </dd>
            </dl>
            <strong>Email:</strong>
            <br>
            <p class="email"><a href="mailto:moji@pioneerpropertymanagement.co">moji@pioneerpropertymanagement.co</a></p>
          </div>

        </div>
      </div>



  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include('partials/footer.php'); ?>
