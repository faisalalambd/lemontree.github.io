<!-- ############################## Header Section ############################## -->
<?php include 'header.php';


?>
<main class="site-main">




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
                                    $sql = "SELECT * FROM newsEvents order by id ASC";
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