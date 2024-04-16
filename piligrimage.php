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

    <!-- Piligrimages -->
    <section class="nindia">
        <div class="border-heading">
            <h1 class="h1tag">
                <img src="images/tour.png" alt="" />
                Piligrimages in India
            </h1>
        </div>
        <div class="bus-container">

            <div class="box">
                <div class="box-img">
                    <a href="omkareshwar.php"><img src="https://static.toiimg.com/photo/70433543.cms" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="omkareshwar.php">Omkareshwar</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="omkareshwar.php">2 days</a>
                                    <a class="lab-1" href="omkareshwar.php">Ask Us</a>
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
                    <a href="trimbakeshwar.php"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Trimbakeshwar_nj.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="trimbakeshwar.php">Trimbakeshwar</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="trimbakeshwar.php">2 days</a>
                                    <a class="lab-1" href="trimbakeshwar.php">Ask Us</a>
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
                    <a href="ahobilam.php"><img src="https://www.bikatadventures.com/images/BlogspotContents/BlogspotImageUrl42343-Bikat-Adventures.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="ahobilam.php">Ahobilam</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="ahobilam.php">2 days</a>
                                    <a class="lab-1" href="ahobilam.php">Ask Us</a>
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
                    <a href="tirupati.php"><img src="https://img.traveltriangle.com/blog/wp-content/uploads/2020/03/Picnic-spots-near-Tirupati.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="tirupati.php">Tirupati</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="tirupati.php">2 days</a>
                                    <a class="lab-1" href="tirupati.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- //================ -->
            <div class="box">
                <div class="box-img">
                    <a href="puri.php"><img src="https://resize.indiatvnews.com/en/resize/newbucket/715_-/2021/08/jagannath-temple-pti-1627842679.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="puri.php">Sri Jagannath Puri Temple, Puri</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="puri.php">3 days</a>
                                    <a class="lab-1" href="puri.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="kashi.php"><img src="https://bsmedia.business-standard.com/_media/bs/img/article/2019-03/08/full/1551984379-4892.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="kashi.php">Kashi Vishwanatha Temple</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="kashi.php">3 days</a>
                                    <a class="lab-1" href="kashi.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =======================? -->
</body>

</html>