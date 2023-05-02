<!-- ############################## Header Section ############################## -->
<?php include 'header.php';


?>
<main class="site-main">

<?php
                                    $sql = "SELECT * FROM bigBanner order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
  <!-- ================ start banner area ================= -->
  <section class="home-banner-area" id="home">
    <div class="container h-100">
      <div class="home-banner">
        <div class="text-center">
          <h4><?php echo $row['small_title']?></h4>
          <h1><?php echo $row['large_title']?></h1>
          <a class="button home-banner-btn" href="#">Book Now</a>
        </div>
      </div>
    </div>
  </section>
  <?php }}?>
  <!-- ================ end banner area ================= -->


  <!-- ================ start banner form ================= -->
  <form class="form-search form-search-position" action="booking_request.php" method="POST">
      <p style="color:red"><?php echo $text?></p>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 gutters-19">
          <div class="form-group">
              <level>Your Contact Number</level>
            <input class="form-control" type="text" name="guest_phone" placeholder="Enter your Phone Number.." required>
          </div>
        </div>
         <div class="col-lg-3 gutters-19">
          <div class="form-group">
              <level>Your email</level>
            <input class="form-control" type="email" name="guest_email" placeholder="Enter your Email.." required>
          </div>
        </div>
        <div class="col-lg-6 gutters-19">
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
               <div class="form-group">
                   <level>Arrival Date</level>
                    <input class="form-control" type="date" name="arival_date" placeholder="" required>
                </div>
              </div>
            </div>
            <div class="col-sm gutters-19">
              <div class="form-group">
             
                   <level>Deperture Date</level>
                    <input class="form-control" type="date" name="deperture_date" placeholder="" required>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
           <div class="col-lg-4 gutters-19">
             
          <div class="form-group">
              <level>Number Of Adults</level>
            <input class="form-control" type="number" name="adult_guest_number" value="1" required>
          </div>
       
               
           </div>
           
            <div class="col-lg-4 gutters-19">
             
          <div class="form-group">
              <level>Number Of Childs</level>
            <input class="form-control" type="number" name="child_guest_number" value="1" required>
          </div>
       
               
           </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group" style="margin-top:25px">
            <button class="button button-form" type="submit">Booking Request</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- ================ end banner form ================= -->

  <!-- ================ welcome section start ================= -->
  <?php
                                    $sql = "SELECT * FROM ourResidence order by id desc limit 3";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
  <section class="welcome">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="card">
            <img class="" src="admin/assets/image/<?php echo $row['image'] ?>" alt="Welcome to Lemon tree Hotel">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="welcome-content">
            <h2 class="mb-4"><span class="d-block">Welcome</span> to Lemon Tree Hotel</h2>
            <?php echo $row['description'] ?>
            <a class="button button--active home-banner-btn mt-4" href="about.php">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }}?>
  <!-- ================ welcome section end ================= -->


  <!-- ================ Explore section start ================= -->
  <section class="section-margin" style="padding-top:30px">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <!--<img src="img/home/bed-icon.png" alt="">-->
        </div>
        <h2>Explore Our Rooms</h2>
      </div>

      <div class="row">
         <?php
                                    $sql = "SELECT * FROM ourRooms order by id asc limit 3";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>  
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" style="margin-bottom:20px">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">BDT. <?php echo $row['price'] ?> <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#"><?php echo $row['title'] ?></a></h4>
              
              <!--<a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>-->
            </div>
          </div>
        </div>

<?php }}?>
       
      </div>
    </div>
  </section>
  <!-- ================ Explore section end ================= -->



  <!-- ================ video section start ================= -->
  <!--<section class="video-area">-->
  <!--  <div class="container">-->
  <!--    <div class="row justify-content-center align-items-center flex-column text-center">-->
  <!--      <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">-->
  <!--        <span></span>-->
  <!--      </a>-->
  <!--      <h3>Seaplace</h3>-->
  <!--      <p>View four has said does men saw find dear shy talent</p>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!-- ================ video section end ================= -->

  <!-- ================ special section start ================= -->
  <!--<section class="section-padding bg-porcelain">-->
  <!--  <div class="container">-->
  <!--    <div class="section-intro text-center pb-80px">-->
  <!--      <div class="section-intro__style">-->
  <!--        <img src="img/home/bed-icon.png" alt="">-->
  <!--      </div>-->
  <!--      <h2>Special Facilities</h2>-->
  <!--    </div>-->
  <!--    <div class="special-img mb-30px">-->
  <!--      <img class="img-fluid" src="img/home/special.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="row">-->
  <!--      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">-->
  <!--        <div class="card card-special">-->
  <!--          <div class="media align-items-center mb-1">-->
  <!--            <span class="card-special__icon"><i class="ti-home"></i></span>-->
  <!--            <div class="media-body">-->
  <!--              <h4 class="card-special__title">Conference Room</h4>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--          <div class="card-body">-->
  <!--            <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">-->
  <!--        <div class="card card-special">-->
  <!--          <div class="media align-items-center mb-1">-->
  <!--            <span class="card-special__icon"><i class="ti-bell"></i></span>-->
  <!--            <div class="media-body">-->
  <!--              <h4 class="card-special__title">Swimming Pool</h4>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--          <div class="card-body">-->
  <!--            <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">-->
  <!--        <div class="card card-special">-->
  <!--          <div class="media align-items-center mb-1">-->
  <!--            <span class="card-special__icon"><i class="ti-car"></i></span>-->
  <!--            <div class="media-body">-->
  <!--              <h4 class="card-special__title">Sports Culb</h4>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--          <div class="card-body">-->
  <!--            <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!-- ================ special section end ================= -->

  <!-- ================ carousel section start ================= -->
  <!--<section class="section-margin" style="padding-top:30px">-->
  <!--  <div class="container">-->
  <!--    <div class="section-intro text-center pb-20px">-->
  <!--      <div class="section-intro__style">-->
          <!--<img src="img/home/bed-icon.png" alt="">-->
  <!--      </div>-->
  <!--      <h2>Our Guest Love Us</h2>-->
  <!--    </div>-->
  <!--    <div class="owl-carousel owl-theme testi-carousel">-->
  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial1.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>Robert Mack</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial2.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>David Alone</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial3.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>Adam Pallin</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial1.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>Robert Mack</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial2.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>David Alone</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial3.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>Adam Pallin</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial1.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>Robert Mack</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="testi-carousel__item">-->
  <!--        <div class="media">-->
  <!--          <div class="testi-carousel__img">-->
  <!--            <img src="img/home/testimonial2.png" alt="">-->
  <!--          </div>-->
  <!--          <div class="media-body">-->
  <!--            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>-->
  <!--            <div class="testi-carousel__intro">-->
  <!--              <h3>David Alone</h3>-->
  <!--              <p>CEO & Founder</p>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!-- ================ carousel section end ================= -->


  <!-- ================ news section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <!--<img src="img/home/bed-icon.png" alt="">-->
        </div>
        <h2>Our Offers & Events</h2>
      </div>

      <div class="row">
          <?php
                                    $sql = "SELECT * FROM newsEvents order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card card-news">
            <div class="card-news__img">
              <img class="card-img" src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
            </div>
            <div class="card-body">
              <h4 class="card-news__title"><a href="#"><?php echo $row['title']?></a></h4>
              <!--<ul class="card-news__info">-->
              <!--  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>-->
              <!--</ul>-->
              <!--<p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>-->
              <!--<a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>-->
            </div>
          </div>
        </div>
        <?php }}?>

       
        </div>

        
      </div>
    </div>
  </section>
  <!-- ================ news section end ================= -->

</main>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>