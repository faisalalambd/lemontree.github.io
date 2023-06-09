<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; ?>



<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="about">
  <div class="container h-100">
    <div class="blog-banner">
      <div class="text-center">
        <h1>About Us</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ================ end banner area ================= -->


<!-- ================ welcome section start ================= -->
<section class="welcome pt-0 section-margin">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="row no-gutters welcome-images">
          <div class="col-sm-7">
            <div class="card">
              <img class="" src="img/home/welcomeBanner1.png" alt="Card image cap">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="card">
              <img class="" src="img/home/welcomeBanner2.png" alt="Card image cap">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <img class="" src="img/home/welcomeBanner3.png" alt="Card image cap">
            </div>
          </div>
        </div>
      </div>
      <?php
                                    $sql = "SELECT * FROM ourResidence order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
      <div class="col-lg-7">
        <div class="welcome-content">
          <h2 class="mb-4"><span class="d-block">Welcome</span> to our residence</h2>
           <?php echo $row['description'] ?>
           <!--<a class="button button--active home-banner-btn mt-4" href="#">Learn More</a>-->
        </div>
      </div>
      <?php }}?>
    </div>
  </div>
</section>
<!-- ================ welcome section end ================= -->

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
<section class="section-margin">
  <div class="container">
    <div class="section-intro text-center pb-20px">
      <div class="section-intro__style">
        <!--<img src="img/home/bed-icon.png" alt="">-->
      </div>
      <h2>Our Guest Love Us</h2>
    </div>
    <div class="owl-carousel owl-theme testi-carousel">
      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial1.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Robert Mack</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial2.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>David Alone</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial3.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Adam Pallin</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial1.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Robert Mack</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial2.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>David Alone</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial3.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Adam Pallin</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial1.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Robert Mack</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial2.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>David Alone</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ carousel section end ================= -->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>