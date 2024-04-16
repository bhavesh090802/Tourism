<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/char.css" />
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
                Char Dham
            </h1>
        </div>
        <div class="char">
            <img src="https://www.gotouttarakhand.com/wp-content/uploads/2022/05/Char-Dham-Yatra-2022-Started.jpg" alt="">
        </div>
        <div class="para1">
            <p>Uttarakhand, also known as Devbhoomi or the Land of Gods, is home to numerous temples and welcomes devotees all year round. Among the countless religious sites and circuits that devotees visit in Uttarakhand, one of the most prominent is the Char Dham Yatra. This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations. <br>
                The high-altitude shrines remain shut for around six months every year, opening in summers (April or May) and closing with the onset of winter (October or November). It is believed that one should complete the Char Dham Yatra in a clockwise direction. Hence, the pilgrimage starts from Yamunotri, proceeds towards Gangotri, onto Kedarnath, and finally ends at Badrinath. The journey can be completed by road or by air (helicopter services are available). Some devotees even do a Do Dham Yatra or a pilgrimage to two shrines - Kedarnath and Badrinath.
                    <br>
                The Yamunotri temple, lodged in a narrow gorge close to the source of River Yamuna (the second-most sacred Indian river after River Ganga) in Uttarkashi district, is dedicated to Goddess Yamuna. The district of Uttarkashi is also home to Gangotri dedicated to Goddess Ganga, the most sacred of all Indian rivers. Located in the Rudraprayag district lies Kedarnath, dedicated to Lord Shiva. Badrinath, home to the sacred Badrinarayan Temple, is dedicated to Lord Vishnu. The Char Dham Yatra is as divine as it is arduous but fulfills the soul!</p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Char Dham Yatra
                            </span>
                            <span class="lab">
                                10 days
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