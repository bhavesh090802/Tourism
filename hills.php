<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism-Hills</title>
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

    <!-- Hill Stations -->
    <section class="nindia">
        <div class="border-heading">
            <h1 class="h1tag">
                <img src="images/hill.png" alt="" />
                Hill Stations
            </h1>
        </div>
        <div class="bus-container">
            <div class="box">
                <div class="box-img">
                    <a href="leh.php"><img src="https://www.india.com/wp-content/uploads/2022/06/ladakh-img.jpg" alt="" />
                </div></a>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="leh.php">Leh-Ladakh</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="leh.php">7 days</a>
                                    <a class="lab-1" href="leh.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="goa.php"><img src="https://im.indiatimes.in/content/2021/Aug/Goa-copy_61150ebf21bc6.jpg?w=1092&h=558&cc=1" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="goa.php">Goa</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="goa.php">4 days</a>
                                    <a class="lab-1" href="goa.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="dharmashala.php"><img src="https://img.traveltriangle.com/blog/wp-content/uploads/2019/11/Homestays-In-Dharamshala-cover_19th-Nov.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="dharmashala.php">Dharamshala</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="dharmashala.php">4 days</a>
                                    <a class="lab-1" href="dharmashala.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 

            <div class="box">
                <div class="box-img">
                    <a href="darjeeling.php"><img src="https://i0.wp.com/myvoice.opindia.com/wp-content/uploads/sites/3/2021/04/darjeeling-Large.jpg?fit=1440%2C1080&ssl=1" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="darjeeling.php">Darjeeling</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="darjeeling.php">4 days</a>
                                    <a class="lab-1" href="darjeeling.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="coorg.php"><img src="https://assets.cntraveller.in/photos/60b9f3004f828f5ab44b7006/master/w_1600%2Cc_limit/Coorg-1.jpg" alt="" />
                </div></a>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="coorg.php">Coorg</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="coorg.php">3 days</a>
                                    <a class="lab-1" href="coorg.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="ooty.php"><img src="https://images-acme.mmtcdn.com/prod-acme-image/system/product_media/c/132416/media5MIAVT8E6HZRX.jpg?imwidth=520&quality=70" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="ooty.php">Ooty and Coonoor</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="ooty.php">5 days</a>
                                    <a class="lab-1" href="ooty.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="shimla.php"><img src="https://www.clubmahindra.com/blog/media/section_images/shuttersto-1a47b83e6a03271.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="shimla.php">Shimla</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="shimla.php">4 days</a>
                                    <a class="lab-1" href="shimla.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="rohtang.php"><img src="https://img.traveltriangle.com/blog/wp-content/uploads/2020/01/Rohtang-pass-in-summer_16th-jan.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="rohtang.php">Rohtang</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="rohtang.php">4 days</a>
                                    <a class="lab-1" href="rohtang.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="jog.php"><img src="https://s3.india.com/travel/wp-content/uploads/2017/06/Jog-Falls.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="jog.php">Jog Falls</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="jog.php">2 days</a>
                                    <a class="lab-1" href="jog.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="munnar.php"><img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2014/11/tea-gardens-munnar-cover.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="munnar.php">Munnar</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="munnar.php">4 days</a>
                                    <a class="lab-1" href="munnar.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="khandala.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgtTgwQT9rnIb3giAWqcLyS8pDOY-jBmK_4zrMnqhkWPAzXh82Pw72ZHPomwWfGm9HZmo&usqp=CAU" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="khandala.php">Khandala</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="khandala.php">4 days</a>
                                    <a class="lab-1" href="khandala.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="mount.php"><img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/02/guru-shikhar-peak-cover.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="mount.php">Mount Abu</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="mount.php">3 days</a>
                                    <a class="lab-1" href="mount.php">Ask Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>