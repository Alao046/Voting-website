

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INEC</title>
    <!-- <link
      rel="stylesheet"
      href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
   

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white">
          <img
            src="logo.jpg"
            alt="Image Logo"
            class="img-fluid"
            style="height: 40px; width: 60px"
          />
          INEC
        </a>
        <button
          class="navbar-toggler t1"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon i1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item l1">
              <a class="nav-link active a1" aria-current="page" href="fhome.php"
                >HOME</a
              >
            </li>
            <!-- <li class="nav-item l2">
              <a class="nav-link a2" href="#">PROFILE</a>
            </li> -->
            <li class="nav-item l3">
              <a class="nav-link a3" href="#">ABOUT US</a>
            </li>
            <li class="nav-item l4">
              <a class="nav-link a4" href="vlogin.php">LOG IN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>THE NIGERIAN PRESIDENTIAL ELECTION</h1>
          <p class="ATA">LOGIN TO PROCEED TO VOTE</p>
        </div>
        <div class="col-sm-6">
          <div
            id="carouselExampleControls"
            class="carousel slide car"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active ssdd">
                <img src="V1.jpg" class="d-block w-100" alt="An Image" />
              </div>
              <div class="carousel-item">
                <img src="V2.jpg" class="d-block w-100" alt="An Image" />
              </div>
              <div class="carousel-item">
                <img src="V3.jpg" class="d-block w-100" alt="An Image" />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row prodiv">
        <div class="col-lg-4 mb-4">
          <div class="card cance">
            <img
              src="tinubu.jpg"
              class="card-img-top img-fluid ime"
              alt="An Image"
            />
            <div class="card-body text-center sss">
              <h5 class="card-title ww">BOLA AHMED TINUBU</h5>
              <input class="vote" type="submit" name="vote1" value="VOTE" style="display: none;" />
              <p class="vc">
                VOTE COUNT:
                <span class="count">0</span>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card cance">
            <img
              src="atiku.jpg"
              class="card-img-top img-fluid ime"
              alt="An Image"
            />
            <div class="card-body text-center sss">
              <h5 class="card-title ww">ATIKU ABUBAKAR</h5>
              <input class="vote" type="submit" name="vote2" value="VOTE" style="display: none;" />
              <p class="vc">
                VOTE COUNT:
                <span class="count">0</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card cance">
            <img
              src="obi.jpg"
              class="card-img-top img-fluid ime"
              alt="An Image"
            />
            <div class="card-body text-center sss">
              <h5 class="card-title ww">PETER GRINGORY OBI</h5>
              <input class="vote" type="submit" name="vote2" value="VOTE" style="display: none;" />
              <p class="vc">
                VOTE COUNT:
                <span class="count">0</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>