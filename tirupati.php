<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/tirupati.css" />
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
                Tirupati
            </h1>
        </div>
        <div class="char">
            <img src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2021/12/tirumala-pti-1640594654.jpg" alt="">
        </div>
        <div class="para1">
            <p>
                Tirupatiis a city in the Indian state of Andhra Pradesh. It is the administrative headquarters of the Tirupati district. Located 415 km (258 mi) southwest of state's capital Amaravati, the city is home to the important Hindu shrine of Tirumala Venkateswara Temple and other historic temples and is referred to as the "Spiritual Capital of Andhra Pradesh". It is one of the eight Swayam vyaktha kshetras (Self-Manifested Temples) dedicated to Vishnu. Tirupati is a municipal corporation and the headquarters of Tirupati (urban) mandal, Tirupati (rural) mandal, and the Tirupati revenue division.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Tirupati
                            </span>
                            <span class="lab">
                                2 days
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