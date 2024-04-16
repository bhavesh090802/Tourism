<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/dharmasthala.css" />
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
                <img src="images/cam.png" alt="" />
                Kedarnath
            </h1>
        </div>
        <div class="char">
            <img src="https://www.bizarexpedition.com/images/kedar.jpg" alt="">
        </div>
        <div class="para1">
            <p>
                Kedarnath is a town in Rudraprayag district in the state of Uttarakhand in India and has gained importance because of the Kedarnath Temple. It is approximately 86 kilometres from Rudraprayag, the district headquarter. It is a Nagar panchayat in the Rudraprayag district. Kedarnath is the most remote of the four Chota Char Dham pilgrimage sites. It is located in the Himalayas, about 3,583 m (11,755 ft) above sea level near the Chorabari Glacier, which is the source of the Mandakini river. The town is flanked by snow-capped peaks, most prominently the Kedarnath Mountain. The nearest road head is at Gaurikund about 16 km away. The town suffered extensive destruction during June 2013 from the Flash Floods caused by torrential rains in Uttarakhand state.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Kedarnath
                            </span>
                            <span class="lab">
                                8 days
                            </span>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            Offer
                            <span class="lab">
                                Ask Us For Rate
                            </span>
                        </h3>
                    </li>
                </ul>
                <a href="book.php" class="text">
                    <button class="btn btn-1">Book Package</button>
                </a>
            </div>
        </div>
    </section>
</body>

</html>