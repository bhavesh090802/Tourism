<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/leh.css" />
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
                Leh-Ladakh
            </h1>
        </div>
        <div class="char">
            <img src="https://www.oyorooms.com/travel-guide/wp-content/uploads/2021/08/GlobalBannerRevamp-Blog2-1.jpg" alt="">
        </div>
        <div class="para1">
            <p>Located in the Ladakh region of Jammu and Kashmir, Leh is known for its stunning scenic locales, Buddhist temples and pristine environment. Due to the strong influence of Tibetan Buddhism, Leh is also known as Little Tibet or the Land of Lamas. Barren mountains with brightly painted gompas (or monasteries), fluttering prayer flags, rocky ridges, tiny settlements and the Indus River add to the overall charm of the region. <br>
                Once the capital of the Himalayan kingdom Ladakh, Leh is still dominated by the Leh Palace. The former palace of the royal family of Ladakh, Leh Palace is built in the same style as the Potala Palace in Lhasa, Tibet. Buddhist monasteries and study centers like Shanti stupa and Sankar Gompa also attract a lot of travelers.
                <br>
                From high-altitude treks to river rafting in the Indus and Zanskar River, Leh has developed as a highly preferred destination for adventure sports. Leh is also a major trading center and offers a great shopping experience with impressive Tibetan handicrafts, jewelry, woolen clothes and exquisite carpets. Leh comprises New Town and Old Town. The Old Town has been included in World Monuments Fund’s list of 100 most endangered sites.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Leh-Ladakh
                            </span>
                            <span class="lab">
                                7 days
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