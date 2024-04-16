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
                Shimla
            </h1>
        </div>
        <div class="char">
            <img src="https://www.clubmahindra.com/blog/media/section_images/shuttersto-1a47b83e6a03271.jpg" alt="">
        </div>
        <div class="para1">
            <p>
               
                The town is famous for pleasant walking experiences on hillsides surrounded by pine and oak forests. This capital city of Himachal Pradesh is famous for The Mall, ridge, and toy train. With colonial style buildings, the town has relics of ancient past that lend it a distinct look.
            </p>
        </div>
        <div class="row row1 row2">
            <div class="tour">
                <ul>
                    <li>
                        <h3>
                            <span class="label">
                                Shimla
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