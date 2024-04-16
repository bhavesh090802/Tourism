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
                Ooty
            </h1>
        </div>
        <div class="char">
            <img src="https://ootytourism.co.in/images/v2/places-to-visit-in-coonoor/tourist-sightseeing-places-to-visit-in-coonoor.jpg" alt="">
        </div>
        <div class="para1">
            <p>
                Famous for producing the Nilgiri tea, Coonoor is one of the most beautiful hill stations situated in the Nilgiri hills in Western Ghats, in the Indian state of Tamil Nadu. Located at an altitude of over 6000 ft ASL, Coonoor is the quieter cousin of otherwise famous and busier Ooty. It is situated around 20 kilometres from Ooty.
                <br>
                Coonoor has the beauty of tea plantations, valleys, ravines and waterfalls all around. There are quite a few trails for trekking and hiking in the surrounding hills of Western Ghats around Coonoor.
                <br>
                The place is divided between Upper Coonoor and Lower Coonoor. Whereas Lower Coonoor is a city centre with most tourist crowds, Upper Coonoor is far from traffic and crowd and is best for people who wish to stay in the midst of hills. Birdwatching can be the best pastime as the hill station is a birder’s paradise.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Ooty
                            </span>
                            <span class="lab">
                                5 days
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