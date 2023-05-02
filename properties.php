<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; ?>



<!-- ================ start banner area ================= -->
<section class="contact-banner-area" id="contact">
  <div class="container h-100">
    <div class="contact-banner">
      <div class="text-center">
        <h1>Accomodation</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Accomodation</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
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


<!-- ================ Explore section start ================= -->
<section class="section-margin section-margin--small" style=margin-top:-100px>
  <div class="container">
    <div class="section-intro text-center pb-80px">
      <div class="section-intro__style">
        <!--<img src="img/home/bed-icon.png" alt="">-->
      </div>
      <h2>Explore Our Rooms</h2>
    </div>

    <div class="row pb-4">
        
      <?php
                                    $sql = "SELECT * FROM ourRooms order by id asc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>    
      <div class="col-md-6 col-xl-4 mb-5">
        <div class="card card-explore">
          <div class="card-explore__img">
            <img class="card-img" src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
          </div>
          <div class="card-body">
            <h3 class="card-explore__price">BDT. <?php echo $row['price'] ?>  <sub>/ Per Night</sub></h3>
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



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>