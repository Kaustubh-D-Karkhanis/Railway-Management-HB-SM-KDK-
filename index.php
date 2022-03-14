<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;600&display=swap" rel="stylesheet">
    <!-- My css sheet -->
    <link rel="stylesheet" href="homepage.css">

    <title>Welcome to RMP</title>
  </head>
  <body>
      <div class="container">
          <header>
              <h3>Railway Management Portal</h3>
          </header>
      </div>

      <!-- navbar -->

      <div class="mynav">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Book now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#offers">Travel Ideas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="adminlogin.php">Admin</a>
            </li> -->
          </ul>
      </div>

      <!-- Carousel -->

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.1.jpg" class="d-block w-100" alt="Slide 1 image">
            <div class="carousel-caption d-none d-md-block">
              <h5>One stop destination</h5>
              <p>This portal is your one stop destination for rail travel. Book tickets, cancel tickets, order catering and much more </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide2.1.jpg" class="d-block w-100" alt="Slide 2 image">
            <div class="carousel-caption d-none d-md-block">
              <h5>Travel India with us</h5>
              <p>Avail exclusive offers on tickets and explore travel packages to satisfy your wanderlust</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide3.2.jpg" class="d-block w-100" alt="Slide 3 image">
            <div class="carousel-caption d-none d-md-block">
              <h5>Make travel a luxury</h5>
              <p>Book luxury train tickets at affordable prices. Travel like royals and let us make unforgettable memories for you.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Customer reviews -->
      <!-- row 1 -->

      <div class="container customer" id="offers">
          <header class="customer reviews">
              <h4>Some awesome travel ideas from us !</h4>
          </header>

          <div class="row" >
              <div class="col-4  ">
                  <div class="card bmi " style="width: 18rem;">
                    <img src="images/stockreview1.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                      <p class="card-text">
                        <h6>Shimla</h6>
                        <p>The winter holiday destination of India</p>
                        <a href="#">Explore >></a>
                      </p>
                    </div>
                  </div>
              </div>

              <div class="col-4 ">
                <div class="card bmi" style="width: 18rem;">
                  <img src="images/stockreview2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">
                      <h6>Jaipur</h6>
                      <p>Relive the royal glory in the pink city.</p>
                      <a href="#">Explore >></a>
                    </p>
                  </div>
                </div>
            </div>

                <div class="col">
                    <div class="card bmi" style="width: 18rem;">
                      <img src="images/stockreview3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">
                          <h6>Ooty</h6>
                          <p>Experience the Queen of Hillstation</p>
                          <a href="#">Explore >></a>
                        </p>
                      </div>
                    </div>
                </div>
            
          </div>

          <!-- row 2 -->

          <div class="row" >
            <div class="col-4  ">
                <div class="card bmi" style="width: 18rem;">
                  <img src="images/stockreview4.jpg" class="card-img-top " alt="...">
                  <div class="card-body">
                    <p class="card-text">
                      <h6>Goa</h6>
                      <p>You know what goes down in Goa</p>
                      <a href="#">Explore >></a>
                    </p>
                  </div>
                </div>
            </div>

            <div class="col-4 ">
              <div class="card bmi" style="width: 18rem;">
                <img src="images/stockreview5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <h6>Assam</h6>
                    <p>Sip tea on the land of blue hills & red rivers</p>
                    <a href="#">Explore >></a>
                  </p>
                </div>
              </div>
          </div>

              <div class="col">
                  <div class="card bmi" style="width: 18rem;">
                    <img src="images/stockreview6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                        <h6>Ayodhya</h6>
                        <p>The religious hotspot of India</p>
                        <a href="#">Explore >></a>
                      </p>
                    </div>
                  </div>
              </div>
          
        </div>
      </div>

      

   

   <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>