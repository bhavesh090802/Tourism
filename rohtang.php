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
                Rohtang
            </h1>
        </div>
        <div class="char">
            <img src="https://thumbs.dreamstime.com/b/himachal-pradesh-india-sep-monument-rohtang-la-pass-manali-situated-altitude-around-m-ft-above-sea-level-188480659.jpg" alt="">
        </div>
        <div class="para1">
            <p>
                The name Rohtang means ‘ground of corpses’ due to the number of people who lost their lives trying to cross it. The Rohtang Pass is on the Pir Panjal Mountain Range of the Himalayas. The Rohtang Pass is a natural divide between the humid Kullu Valley, which has predominantly Hindu culture and the arid, high altitude Lahaul and Spiti Valleys which mainly has Buddhists.
                <br>
                Known for its scenic beauty, Rohtang Pass holds strategic importance for India. The Pass offers beautiful sights of glaciers, peaks, Lahaul Valley and the Chandra River. The twin peaks of Geypan are also visible from Rohtang. The pass is on the watershed between the water basins of the Chenab River and the Beas River.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Rohtang
                            </span>
                            <span class="lab">
                                4 days
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