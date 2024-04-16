<?php

include 'app/connect.php';
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $City = $_POST['city'];
    $Remarks = $_POST['remarks'];

    $email_check = "SELECT * FROM contact WHERE email=?";
    $email_stmt = $conn->prepare($email_check);
    $email_stmt->bind_param("s", $Email);
    $email_stmt->execute();
    $email_stmt->store_result();
    $sql = "INSERT INTO contact(Name,phno,email,city,remark)VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisss", $Name, $Phone, $Email, $City, $Remarks);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism-Contact Us</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/contact.css" />
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

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="row1">
                    <div class="contact-team">
                        <h2 class="h2tag">
                            Contact <strong>Tourism</strong>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row1 row2 row3">
                    <h3 class="contact-sub">FeedBack Form</h3>
                    <div class="contact-form">
                        <div class="row">
                            <form action="contact.php" method="post">
                                <div class="row1 row2 row3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="control" required>
                                </div>
                                <div class="row1 row2 row3">
                                    <label for="name">Mobile</label>
                                    <input type="text" name="phone" id="phone" class="control" required>
                                </div>
                                <div class="row1 row2 row3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="control" required>
                                </div>
                                <div class="row1 row2 row3">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="control" required>
                                </div>
                                <div class="row1 row2 row3">
                                    <label for="remarks">Remarks</label>
                                    <textarea name="remarks" id="remarks" cols="30" rows="3" class="control" maxlength="200"></textarea>
                                </div>
                                <div class="row1 row2 row3 right btn-btm">
                                    <button type="submit" class="btn" name="submit" value="1">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row1 row2 row4">
                    <h3 class="contact-sub">Get In Touch</h3>
                    <div class="contact-add">
                        <ul>
                            <li>
                                <label>
                                    <img src="images/whatsapp.png" alt="">Whatsapp -9966853900/9966853200
                                </label>
                            </li>
                            <br><br><br><br><br><br>
                            <li>
                                <label>
                                    <img src="images/phone.png" alt="">Phone -9966816900/9966816200
                                </label>
                            </li>
                            <br><br><br><br><br><br>
                            <li>
                                <label>
                                    <img src="images/email.png" alt="">Email -bkarapu@gmail.com
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>