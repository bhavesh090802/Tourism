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
                                echo $_SESSION['NAME'] ?></a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <section class="trip">
    <div class="border-heading">
      <h1 class="h1tag">
        <img src="images/trip.png" alt="" />
        Trip Packages
      </h1>
    </div>
    <div class="bus-container">
      <div class="box">
        <div class="box-img">
          <a href="char.php"><img src="https://www.culturalindia.net/iliimages/chardham.jpg" alt="" />
        </div></a>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="char.php">Char Dham Yatra</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="char.php">10 days</a>
                  <a class="lab-1" href="char.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="leh.php"><img src="https://www.india.com/wp-content/uploads/2022/06/ladakh-img.jpg" alt="" />
        </div></a>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="leh.php">Leh-Ladakh</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="leh.php">7 days</a>
                  <a class="lab-1" href="leh.php">Ask Us</a>
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
          <a href="goa.php"><img src="https://im.indiatimes.in/content/2021/Aug/Goa-copy_61150ebf21bc6.jpg?w=1092&h=558&cc=1" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="goa.php">Goa</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="goa.php">4 days</a>
                  <a class="lab-1" href="goa.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="dharmasthala.php"><img src="https://static.wixstatic.com/media/a3b209_93f1c5d0b08e47419a0192ca258e3eb8~mv2_d_3508_2480_s_4_2.jpg/v1/fit/w_1000%2Ch_1000%2Cal_c%2Cq_80/file.jpg" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="dharmasthala.php">Dharmasthala</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="dharmasthala.php">3 days</a>
                  <a class="lab-1" href="dharmasthala.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="box">
        <div class="box-img">
          <a href="ooty.php"><img src="https://images-acme.mmtcdn.com/prod-acme-image/system/product_media/c/132416/media5MIAVT8E6HZRX.jpg?imwidth=520&quality=70" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="ooty.php">Ooty and Coonoor</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="ooty.php">5 days</a>
                  <a class="lab-1" href="ooty.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="sahasra.php"><img src="https://touringwithpk.com/wp-content/uploads/2022/02/Nov18-434a.jpg" alt="" />
        </div></a>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="sahasra.php">Sahasralinga</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="sahasra.php">2 days</a>
                  <a class="lab-1" href="sahasra.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="munnar.php"><img src="https://images.thrillophilia.com/image/upload/s--bejISfVD--/c_fill,g_auto,h_600,q_auto,w_975/f_auto,fl_strip_profile/v1/images/photos/000/126/889/original/1522671846_Munnar.jpg.jpg" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="munnar.php">Munnar</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="munnar.php">4 days</a>
                  <a class="lab-1" href="munnar.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="rohtang.php"><img src="https://img.traveltriangle.com/blog/wp-content/uploads/2020/01/Rohtang-pass-in-summer_16th-jan.jpg" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="rohtang.php">Rohtang</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="rohtang.php">4 days</a>
                  <a class="lab-1" href="rohtang.php">Ask Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
          <a href="kedarnath.php"><img src="https://qph.cf2.quoracdn.net/main-qimg-caf388e041f4d3a7c054593b9584bd25-lq" alt="" /></a>
        </div>
        <div class="promo">
          <div class="coaches text-center">
            <h5>
              <a href="kedarnath.php">Kedarnath</a>
            </h5>
            <div class="row">
              <div class="row-1">
                <div class="action">
                  <a class="lab" href="kedarnath.php">8 days</a>
                  <a class="lab-1" href="kedarnath.php">Ask Us</a>
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