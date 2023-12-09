<?php
    include_once("logindatabase.php");
    
 
    if (isset($_POST["login"])) {
      $email = $_POST['email'];
      $password = $_POST['password'];


      // dto sa sql yung login palitan mo kung ano nlagay mo sa database ninyo
        $sql = "SELECT * FROM `login` WHERE  email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            $_SESSION['email']= $email;
            header("Location:index.php");
        }else{  
            header("Location:index.php");
        }     
            
        $conn->close();
}

?>



<!DOCTYPE html>
<html>
<head>
        <title>
            PLSP Library Management System
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="wrapper">
    <header>
		<div class="logo">
		<img src="logo1.png">
		</div>
		<h1 style="color: yellow; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">PLSP Library Management System</h1>
		<nav>
			<ul>
				<li><a href="home.php" style="color: yellow;">Home</a></li>
				<li><a href="about_us.html" style="color: yellow;">About Us</a></li>
				<li><a href="bc.html" style="color: yellow;">Book Categories</a></li>
			</ul>
		</nav>
	</header>

    <section>
		<br><br><br><br><br><br><br><br>
		<div class="userlogin">
		<p style="color: white; font-size: 25px; font-family: Arial, Helvetica, sans-serif;"><b>User Login</b></p>
		<br> <div class="log">
			<form action="" method="post" style="text-align: right;">
				<input type="text" name="email" placeholder="email" required=""><br><br><br><br>
				<input type="password" name="password" placeholder="Password" required=""><br><br><br><br>
				<button name="login"style="color: white;">Login</button><br>
      </form>
				<p style="font-family: Arial Unicode MS;"><br>
					<a style="color: white; font-size: 12px;" href="forgatpass.php">Forgot Password?</a>
					<a style="color: white; font-size: 12px;" href="register.php">Register</a>
				</p>
			</div>
	</div>
		<div class="box"><br><br><br><br>
			<p style="text-align: center; font-size: 50px;"><b>Welcome to Library!</b></p><br>
			<p style="text-align: center; font-size: 20px;">Opens at 9:00 am</p><br>
			<p style="text-align: center; font-size: 20px;">Closes at 3:00 pm</p>
		</div>
        
    </section>
</div>
</body>
</body>
<style>
 * {
    margin: 0;
    padding: 0;
}

.wrapper
{
    background-color: black;
}
header
{
    height: 90px;
    width: 100%;
    background-color: rgb(21, 102, 21);
}
section
{
    height: 833px;
    width: 100%;
    background-color: white;
}
.logo
{
    margin-top: 5px;
    padding-left: 20px;
    float: left;
}
header h1
{
    margin-left: 5px;
    float: left;
    margin-top: 38px;
}
li a
{
    color: white;
    text-decoration: none;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
li a:hover
{
    text-decoration-line: underline;
}
nav{
    float: right;
    word-spacing: 3px;
    padding: 20px;
}
nav li
{
    display: inline-block;
    line-height: 50px;
    margin-right: 50px;
}
section
{
    background-image: url("pic/Login Page.png");
    background-repeat: no-repeat;
    background-size: cover;
}
.box
{
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    float: left;
    margin-left: 320px;
    margin-top: 100px;


}
.userlogin
{
    margin-right: 460px;
    margin-top: 120px;
    float: right;
}
.userlogin p
{
    margin-left: 40px;
    text-align: center;
}
input
{
    height: 50px;
    width: 350px;
    border-color: white;
    border-radius: 70px;
    background-color: transparent;
    float: right;
    margin-right: -29px;
    font-size: 15px;
    text-align: center;

}
button
{
    height: 50px;
    width: 300px;
    margin-left: 30px;
    border: wheat;
    border-radius: 50px;
    background-color: rgb(33, 212, 114);
}

</style>
</html>