<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism-About Us</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/about.css" />
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

    <section class="about">
    <div class="border-heading">
        <h1 class="h1tag">
          <img src="images/about.png" alt="" />
          About Us
        </h1>
      </div>
      <div class="img1">
        <img src="https://media.istockphoto.com/photos/travel-planning-background-picture-id1309040743?b=1&k=20&m=1309040743&s=170667a&w=0&h=eyIzT1oSW2B5gPMPqgybEseIYIUrY96cxPTE_B0ewVs=" alt="">
      </div>
      <p class="para1">
        T<strong>&</strong>T have more than 7 years of experience in car/bus rental service and organising state wise holiday tour packages in India. We offer a different variety of cars/buses and offering Budget and Luxury Bundles as per customer requirements. We also have a separate and different tour package experts team to handle corporate and Group tour packages to meet their business requirements. As tour Bundles experts we also provide fleet of all ranges for your comfort zone. We are best in handling inbound tours & travels for Karnataka. T&T is one of the best travels in Bangalore. <br>
        T&T is serving its customer with a unique blend of experience and innovation in organizing package tours all across India. We are the most preferred travel partner for some of the well-known corporates in Bangalore. We work closely with Karnataka State Tourism Development Corporation(KSTDC) and Jungle Lodges and Resorts (JLR ). We are affiliated to it to promote all types of tourism in India. 
      </p>
    </section>
</body>
</html>