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
                Dharmasthala
            </h1>
        </div>
        <div class="char">
            <img src="https://travel2karnataka.com/images/dharmasthala_temple.jpg" alt="">
        </div>
        <div class="para1">
            <p>Shri Kshetra Dharmasthala, the land of righteousness and piety, is one of south India’s most renowned religious landmarks with a history as old as 800 years. Manjunatheshwara, the chief deity of the spiritual abode, has taken the form of a shivalinga and made immaculate, the temple town of Dharmasthala since and forever. Lord Manjunatheshwara, is being worshipped in a very unusual yet exceptionally inordinate manner in Shree kshetra dharmasthala, as this Shaiva temple is beseeched by Vaishnava priests and administered by Jain descendants.
            <br>
            “Dharmasthala”, the abode of dharma, is the quintessence of humanity and faith. As the name suggests, the word dharma in its truest sense means righteousness, it is the embodiment of the world’s most divine emotions in spite of one’s cast, creed or religion.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Dharmasthala
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