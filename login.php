<?php
include 'app/connect.php';
session_start();
if (isset($_POST['submit'])) {
	$Email = $_POST['email'];
	$Password = $_POST['password'];

	$sql = "SELECT * FROM register WHERE email=? ";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $Email);
	$stmt->execute();

	$stmt->bind_result($db_username,$db_email,$db_phno,$db_pass);
	if ($stmt->fetch()) {
		$pass_decode = password_verify($Password, $db_pass);
		if ($pass_decode) {
			echo "Login Successful";
            $_SESSION['NAME'] = $db_username;
			header("location:home.php");
		} else {
			echo "Incorrect Password ";
		}
	} else {
		echo "Incorrect username";
	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism  -Registeration</title>
    </script>
    <link rel="stylesheet" href="assets/login.css">
</head>

<body>
    <div class="showcase">
    <div class="name">Bhavesh Madhusudhan Karapu(2060495)</div>
        <div class="logo">
            <span>Tourism </span>
        </div>
        <div class="wrapper">
            <form method="post" action="login.php">
                <h2>Login</h2>
                <input type="email" name="email" class="input" placeholder="Email ID" required="required"><br><br>
                <input type="password" name="password" class="input" placeholder="password" minlength="6" required="required"><br><br>
                <button type="submit" name="submit" class="btn"><b>SUBMIT</b></button><br>
                <div class="signup">
                    <p>New to our website</p>
                    <a href="register.php">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>