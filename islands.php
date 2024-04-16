<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox" />
        <div class="name">Bhavesh Madhusudhan Karapu(2060495)</div>
        <div class="logo"><strong>Tourism</strong></div>
        <ul class="links">
        <li><a href="home.php">Home</a></li>
        <li><a href="piligrimage.php">Piligrimage</a></li>
        <li><a href="hills.php">Hill stations</a></li>
        <li><a href="islands.php">Islands</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="logout.php"><?php session_start();
                                    echo $_SESSION['NAME'] ?></a></li>>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <!-- Islands -->
    <section class="island">
    <div class="border-heading">
      <h1 class="h1tag">
        <img src="images/tour.png" alt="" />
        Islands
      </h1>
    </div>
    <div class="bus-container">
      <div class="box">
        <div class="box-img">
          <a href="nicobar.php"><img src="https://im.hunt.in/cg/Port-Blair/City-Guide/nicobar.jpg" alt="" />
        </div></a>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="nicobar.php">Great Nicobar</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="nicobar.php">5 days</a>
                  <a class="lab-1" href="nicobar.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="swaraj.php"><img src="https://www.andamanbluebay.com/media/pages/Swaraj%20Dweep%20Island%20in%20Andaman,%20Former%20Havelock%20Island.jpg" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="swaraj.php">Swaraj Dweep</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="swaraj.php">5 days</a>
                  <a class="lab-1" href="swaraj.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="munroe.php"><img src="https://www.tourmyindia.com/blog//wp-content/uploads/2020/11/Feature-City-Palace-Udaipur-Rajasthan.jpg" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="munroe.php">Munroe Island</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="munroe.php">3 days</a>
                  <a class="lab-1" href="munroe.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="diu.php"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/f2/df/3f/inskhukery.jpg?w=600&h=400&s=1" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="diu.php">Diu Island</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="diu.php">4 days</a>
                  <a class="lab-1" href="diu.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="divar.php"><img src="https://i0.wp.com/itsgoa.com/wp-content/uploads/2015/06/divar_island1.jpg?fit=1600%2C1067&ssl=1" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="divar.php">Divar Island </a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="divar.php">4 days</a>
                  <a class="lab-1" href="divar.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</body>

</html>