<?php
    
    include 'app/connect.php';
    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Phone = $_POST['phno'];
        $Email = $_POST['mail'];
        $City = $_POST['city'];
        $Tour = $_POST['tour'];
        $Start_Date = date("m-d-Y", strtotime($_POST['sdate']));
        $Persons = $_POST['persons'];
        $Days = $_POST['days'];
        $Message = $_POST['message'];

        $email_check = "SELECT * FROM booking WHERE email=?";
        $email_stmt = $conn->prepare($email_check);
        $email_stmt->bind_param("s",$Email);
        $email_stmt->execute();
        $email_stmt->store_result();
        $sql = "INSERT INTO booking(gname,phno,email,city,tourpkg,sdate,persons,days,message)VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissssiis",$Name,$Phone,$Email,$City,$Tour,$Start_Date,$Persons,$Days,$Message);
        $result= $stmt->execute();
        if ($result) {
          header("location:home.php");
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourism</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/book.css" />
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

    <section id="booking">
      <div class="row tabs">
        <div class="col">
          <ul>
            <li>Book Tour Package</li>
          </ul>
        </div>
        <fieldset class="book">
          <form action="book.php" method="post">
            <div class="label">
              <label for="gname">Guest Name :</label>
              <input type="text" class="formm" name="name" />
            </div>
            <div class="label">
              <label for="phno">Phone Number :</label>
              <input type="tel" class="formm" name="phno" /><br />
            </div>
            <div class="label">
              <label for="mail">Email :</label>
              <input type="email" class="formm" name="mail" />
            </div>
            <div class="label">
              <label for="city">City :</label>
              <input type="text" class="formm" name="city" /><br />
            </div>
            <div class="label">
              <label for="tour">Tour Package :</label>
              <select name="tour" id="tour" class="formm">
                <option value="">Select...</option>
                <option value="chardham">Char Dham Yatra</option>
                <option value="omkrewr">Omkareshwar</option>
                <option value="kdrnth">Kedarnath</option>
                <option value="trmbkwr">Trimbakeshwar</option>
                <option value="linga">Sahasralinga</option>
                <option value="ahblm">Ahobilam</option>
                <option value="dhrmsthla">Dharmasthala</option>
                <option value="trpt">Tirupati</option>
                <option value="puri">Sri Jagannath Puri Temple, Puri</option>
                <option value="kashi">Kashi Vishwanatha Temple</option>
                <option value="leh">Leh-Ladakh</option>
                <option value="goa">Goa</option>
                <option value="dhrmshla">Dharamshala</option>
                <option value="djling">Darjeeling</option>
                <option value="corg">Coorg</option>
                <option value="ooty">Ooty and Coonoor</option>
                <option value="shmla">Shimla</option>
                <option value="rhtg">Rohtang</option>
                <option value="jog">Jog Falls</option>
                <option value="munnar">Munnar</option>
                <option value="khndla">Khandala</option>
                <option value="Mount Abu">Mount Abu</option>
                <option value="ncbr">Great Nicobar</option>
                <option value="dwep">Swaraj Dweep</option>
                <option value="munro">Munroe Island</option>
                <option value="diu">Diu Island</option>
                <option value="divr">Divar Island</option>
              </select>
            </div>
            <div class="label">
              <label for="sdate"> Start Date :</label>
              <input
                type="date"
                name="sdate"
                class="formm"
                required
              /><br />
            </div>
            <div class="label">
              <label for="persons">Number of Persons :</label>
              <input type="number" class="formm" name="persons" />
            </div>
            <div class="label">
              <label for="days"> Number of Days :</label>
              <input type="number" class="formm" name="days" /><br />
            </div>
            <div class="label">
            <label for="message">Message :</label><br />
                <textarea
                name="message"
                maxlength="500"
                placeholder="Message"
                class="tell"
                cols="60"
                rows="6"
                ></textarea
                ><br /><br />
            </div>
            <button class="btn" type="submit" name="submit">SUBMIT</button
            ><br />
          </form>
        </fieldset>
      </div>
    </section>
  </body>
</html>
