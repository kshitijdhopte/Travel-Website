<?php 

require('./database/config.php');

if(isset($_REQUEST['submit'])){


    $Destination=$_REQUEST['Destination'];

    $person=$_REQUEST['person'];

    $arrivals=$_REQUEST['arrivals'];

    $leaving=$_REQUEST['leaving'];

    $name=$_REQUEST['Pname'];

    $details=$_REQUEST['details'];

    // echo "$Destination+$person+$arrivals+$leaving+$name+$details";

    $q="INSERT INTO travo (id,Destination,person, arrivals,leaving,person_name,details) values (NULL ,'$Destination','$person','$arrivals','$leaving','$name','$details')";

    $res=$conn->query($q);   //query firing

    echo "<script>alert('booking confirmed...')</script>";

}

?>


  <!--navbar section-->

  <?php include 'header.php'; ?>

  <!-- /navbar ends -->


  <!-- home section starts -->

  <div class="home" id="home">
    <div class="content">
      <h5>Welcome to World</h5>
      <h1>Visit <span class="changecontent"></span></h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, illum!</p>
      <a href="#book">Book Place</a>
    </div>
  </div>

  <!-- home section ends -->



  <!-- books section starts -->

  <section class=" book " id="book">
    <div class="container ">
      <div class="mainheading">
        <h1><span>B</span>ook</h1>
      </div>


      <div class="row ">

        <div class="col col-sm-6 col-md-6 py-3 py-md-0">
          <div class="card ">
            <img src="./images/book-img.png" alt="">
          </div>
        </div>

        <div class="col col-md-6 py-3 py-md-0">
          <form action=" " method="post">
            <input type="text" class="form-control" placeholder="Destination" name="Destination" required><br>
            <input type="text" class="form-control" placeholder="No. of Person" name="person" required><br>
            Arrivals<input type="date" class="form-control" placeholder="Arrivals" name="arrivals" required><br>
            Leaving<input type="date" class="form-control" placeholder="Leaving" name="leaving" required><br>

            <input type="text" class="form-control" placeholder="Name" name="Pname" required><br>
            <textarea class="form-control" rows="5" placeholder="Other Details" name="details"></textarea>
            <input type="submit" value="Book Now" class="submit" name="submit" required>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- books section ends -->

  <!-- packages section starts -->

  <section class="packages" id="packages">
    <div class="container">

      <div class="main-heading">
        <h1><span>P</span>ackages</h1>
      </div>

      <div class="row " style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/uk.png" alt="">
            <div class="card-body">
              <h3>United Kingdom</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <div>
                <h6>Price:<strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="card">
            <img src="./images/france.png" alt="">
            <div class="card-body">
              <h3>France</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <div>
                <h6>Price:<strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="card">
            <img src="./images/india.png" alt="">
            <div class="card-body">
              <h3>India</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <div>
                <h6>Price:<strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/italy.png" alt="">
            <div class="card-body">
              <h3>Italy</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <div>
                <h6>Price:<strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="card">
            <img src="./images/pakistan.png" alt="">
            <div class="card-body">
              <h3>Ladakh</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <div>
                <h6>Price:<strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="card">
            <img src="./images/us.png" alt="">
            <div class="card-body">
              <h3>United States</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <div>
                <h6>Price:<strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section Packages End -->



  <!-- Section Services Start -->


  <section class="services" id="services">
    <div class="container py-1">
      <div class="main-heading">
        <h1><span>S</span>ervices</h1>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-md-4 py-3">
          <div class="card">
            <i class="fas fa-hotel"></i>
            <div class="card-body">
              <h3 class="fts1">Affordable Hotel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 ">

          <div class="card">
            <i class="fas fa-utensils"></i>
            <div class="card-body">
              <h3 class="fts1">Food & Drinks</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 ">

          <div class="card">
            <i class="fas fa-bullhorn"></i>
            <div class="card-body">
              <h3 class="fts1">Safty Guide</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
            </div>
          </div>

        </div>

      </div>
      <div class="row" style="margin-top: 30px;">

        <div class="col-md-4 py-3 ">

          <div class="card">
            <i class="fas fa-globe-asia"></i>
            <div class="card-body">
              <h3 class="fts2">Around The World</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 ">

          <div class="card">
            <i class="fas fa-plane"></i>
            <div class="card-body">
              <h3 class="fts2">Fastest Travel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3">

          <div class="card">
            <i class="fas fa-hiking"></i>
            <div class="card-body">
              <h3 class="fts2">Adventures</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section>

  <!-- Section Services End -->




  <!-- Section Gallary Start -->

  <section id="Gallery">
    <div class="container">
      <div class="main-heading">
        <h1><span>G</span>allary</h1>
      </div>
      <div class="row">
        <div class="col-12 col-lg-4 col-md-6 col-sm-12 pt-3">
          <div class="gall">
          <div class="overlay">
                   <h3 class="text-center">Donuts</h3>
          </div>
            <img src="images/g1.png" alt="" class="w-100 gal1">
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 col-sm-12 pt-3">
          <div class="gall">
            <div class="overlay">
                   <h3 class="text-center">Donuts</h3>
          </div>
            <img src="images/g2.png" alt="" class="w-100 gal1">
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-6 col-sm-12 pt-3">
          <div class="gall">
            <div class="overlay">
                   <h3 class="text-center">Donuts</h3>
          </div>
            <img src="images/g3.png" alt="" class="w-100 gal1">
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-6 col-sm-12 pt-3">
          <div class="gall">
            <div class="overlay">
                   <h3 class="text-center">Donuts</h3>
          </div>
            <img src="images/g4.png" alt="" class="w-100 gal1">
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-6 col-sm-12 pt-3">
          <div class="gall">
            <div class="overlay">
                   <h3 class="text-center">Donuts</h3>
          </div>
            <img src="images/g5.png" alt="" class="w-100 gal1">
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-6 col-sm-12 pt-3">
          <div class="gall">
            <div class="overlay">
                   <h3 class="text-center">Donuts</h3>
          </div>
            <img src="images/g6.png" alt="" class="w-100 gal1">
          </div>
        </div>

      </div>
    </div>

  </section>


   <!-- Section Gallary ends -->

   

   <section class="About" id="About">
    <div class="container">
      <div class="main-heading">
        <h1>About <span>Us</span></h1>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-4 pt-lg-3">
          <img src="images/about-img.png" alt="" class="w-100 rounded" >
        </div>
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-4 pt-lg-5 pt-md-5">
          <h2>How Travel Agency Work</h2>
          <p class="abtt-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident perferendis dolorem, numquam earum at nam beatae voluptate natus consectetur facere, saepe cupiditate ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias asperiores nulla rerum, nihil eveniet perferendis sint illum accusamus officiis aliquam nam.</p>
          <button class="bttn">Read More...</button>
        </div>
      </div>
    </div>
   </section>

    <!-- Footer Start --> 

    <?php include 'footer.php'; ?>

     <!-- Footer ends --> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>