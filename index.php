<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Travel Portal</title>

</head>

<body>


  <?php
  include 'index_navbar.php';
  include 'db_connect.php';
  include 'db_connect_modal.php';
  include 'register_modal.php';
  include 'register_modals_database_code.php';

  ?>

  <div class="bd-example my-2 ml-1 mr-1 mb-5">
    <div>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/crouser1 s.jpg" width="300" height="450" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><strong> Welcome To Travel Portal</strong></h1>
              <p style="color: black;"><strong>"Life is a journey, not a destination” – Ralph Waldo Emerson.</strong></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/crouser2 s.jpg" width="300" height="450" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><strong> Welcome To Travel Portal</strong></h1>
              <p style="color: black;"><strong>“A journey of a thousand miles begins with a single step” – Lao Tzu</strong></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/crouser3 s.jpg" width="300" height="450" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><strong>Welcome To Travel Portal</strong></h1>
              <p style="color: black;"><strong>“Live with no excuses and travel with no regrets” ~ Oscar Wilde.</strong></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/crouser4 s.jpg" width="300" height="450" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><strong> Welcome To Travel Portal</strong></h1>
              <p style="color: black;"><strong>“People don't take trips, trips take people.”</strong></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <div class="card-deck my-5">
      <div class="card">
        <img src="Images/top destination in india.jpg" height="304" class="card-img-top" alt="Not Found">
        <div class="card-body">
          <h3 class="card-title">Top Destinations In India</h3>
          <p class="card-text">With more than 30,000 years of history, India is the birthplace of numerous cultures and religions making it one of the most important tourist destinations in the world. India has more than thousand tourist attractions and several World Heritage Sites. Listed below are some of the most extravagant places you can visit in India.</p>
          <a href="Travel_destination_in_india.php" style="text-align: center; color:brown;">
            <p class="card-text">
              <large>Click Here to Explore</large>
            </p>
          </a>
        </div>
      </div>
      <div class="card">
        <img src="Images/top destination outside india.jpg" height="304" class="card-img-top" alt="Not Found">
        <div class="card-body">
          <h3 class="card-title">Top Destinations Outside India</h3>
          <p class="card-text">

            The family vacation is one such experience where you get to experience everything together,family vacation has its own charm. But the biggest hurdle to planning a family vacations can sometimes be budget and destination. Well, we have got it covered in this blog with this list of best Places to visit with family outside India.</p>
          <a href="Travel_destination_outside_india.php" style="text-align: center; color:brown;">
            <p class="card-text">
              <large>Click Here to Explore</large>
            </p>
          </a>
        </div>
      </div>

    </div>
  </div>
  <div class="copyright_text container my-5">
    <h6>
      Copyright © 2020–2021
      Travel Portal.in™. All rights reserved.</h6>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>