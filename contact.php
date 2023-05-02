<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; ?>



<!-- ================ start banner area ================= -->
<section class="contact-banner-area" id="contact">
  <div class="container h-100">
    <div class="contact-banner">
      <div class="text-center">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ================ end banner area ================= -->


<section class="section-margin">
  <div class="container">
    <!-- google map start -->
    <div class="d-none d-sm-block mb-5 pb-4">
      <div id="map" style="height: 420px;"></div>
      <script>
        function initMap() {
          var uluru = {
            lat: -25.363,
            lng: 131.044
          };
          var grayStyles = [{
              featureType: "all",
              stylers: [{
                  saturation: -90
                },
                {
                  lightness: 50
                }
              ]
            },
            {
              elementType: 'labels.text.fill',
              stylers: [{
                color: '#A3A3A3'
              }]
            }
          ];
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {
              lat: -31.197,
              lng: 150.744
            },
            zoom: 9,
            styles: grayStyles,
            scrollwheel: false
          });
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

    </div>
    <!-- google map end -->


    <div class="row">
      <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
        <div class="media contact-info" style="margin-bottom:25px">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Laboni Point Cox's Bazar</h3>
            <!--<p>Santa monica bullevard</p>-->
          </div>
        </div>
        <div class="media contact-info" style="margin-bottom:25px">
          <span class="contact-info__icon"><i class="ti-headphone"></i></span>
          <div class="media-body">
            <h3><a href="tel:">+880171xxxxxxx</a></h3>
            <!--<p>Mon to Fri 9am to 6pm</p>-->
          </div>
        </div>
        <div class="media contact-info" style="margin-bottom:25px">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:support@colorlib.com">info@lemontreehotel.net</a></h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9">
        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control different-control" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
            </div>
          </div>
          <div class="col-md-12 text-right">
            <button type="submit" value="submit" class="button-contact"><span>Send Message</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>