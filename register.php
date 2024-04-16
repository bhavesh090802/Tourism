<?php
include 'app/connect.php';

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Password = $_POST['password'];

    $pass = password_hash($Password, PASSWORD_DEFAULT);

    $email_check = "SELECT * FROM register WHERE email = ?";
    $email_stmt = $conn->prepare($email_check);
    $email_stmt->bind_param("s", $email);
    $email_stmt->execute();

    $email_stmt->store_result();
    if ($email_stmt->num_rows() > 0) {
?>
        <script>
            alert("User Already Registered!")
        </script>
<?php
    } else {

        //template for sql query
        $sql = "INSERT INTO register(name,email, phno, password) VALUES (?,?,?,?)";

        //preparing the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssis",$Name,$Email, $Phone, $pass);
        $result = $stmt->execute();

        if ($result) {
            header("location:login.php");
        }
    }
}
?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism -Registration</title>
    </script>
    <link rel="stylesheet" href="assets/register.css">
</head>

<body>
    <div class="showcase">
    <div class="name">Bhavesh Madhusudhan Karapu(2060495)</div>
        <div class="logo">
            <span>Tourism </span>
        </div>
        <div class="wrapper">
            <form method="post" action="register.php">
                <h2>Registration</h2>
                <input type="text" name="name" class="input" placeholder="Name" required="required"><br><br>
                <input type="email" name="email" class="input" placeholder="Email ID" required="required"><br><br>
                <input type="tel" name="phone" class="input" placeholder="Phone number" required><br><br>
                <input type="password" name="password" class="input" placeholder="password" minlength="6" required="required"><br><br>
                <button type="submit" name="submit" class="btn"><b>SUBMIT</b></button><br>
                <div class="signup">
                    <p>Already have an account</p>
                    <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>