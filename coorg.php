<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/dharmashala.css" />
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
                Coorg
            </h1>
        </div>
        <div class="char">
            <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2018/04/Best-things-to-do-in-Coorg-cover.jpg" alt="">
        </div>
        <div class="para1">
            <p>
                Coorg (Kodagu) is the popular tourist destination in the state of Karnataka. The district of Coorg gives people several reasons to visit other than Abbey Falls or Madikeri Fort. It is famous for coffee and spice estates, beautiful hills, temples and the pleasuring weather.
                <br>
                Summers in Madikeri are pleasant with temperatures ranging from 30-37 degrees Celsius. The warm weather serves as the perfect shelter against the scorching summers. Being the optimal season for long exploration trips, this is the best time to visit Madikeri in Coorg and other towns in the Kodagu district, famous for its spices. Be prepared to meet hordes of fellow travelers from all over the country as this is the season that sees the most tourist activity.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Coorg
                            </span>
                            <span class="lab">
                                3 days
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