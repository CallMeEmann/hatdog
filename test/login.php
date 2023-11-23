
<?php
    include_once("database.php");
    
 
    if (isset($_POST["login"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM students WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: year level.php");
        }else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
            
        $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="login1.css">
</head>
<body>
    
    <div class="box">
        <h2>COLLEGE OF ENGINEERING-PLSP</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Create Account</h1>
                    <span>please make you'r account</span>
                    
                    <input type="text" placeholder="fullname" name="fullname" id="fullname" required />
                    <input type="text" placeholder="username" name="username" id="username" required/>
                    <input type="password" placeholder="Password" name="password" id="password" required/>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="" method="post">
                    <h1>Sign in</h1>
                    <div>
                    <div class="image">
                        <a href=""><img src="pic/291809191_113252248104181_7299213919004557395_n-removebg-preview.png" ></a>
                        <a href=""><img src="pic/285143979_583614463369120_1268553432523587912_n-removebg-preview.png" ></a>
                    </div>
                    </div>
                    <span>PLSP FB PAGE</span>
                    <input type="text" placeholder="username" name="username"/>
                    <input type="password" placeholder="Password" name="password" />
                    <a href="#">Forgot your password?</a>
                    <button type="submit" value="login" name="login" >Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>If you all ready done in Sign up please click here to Login</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Ma'am And Sir</h1>
                        <p>If you don't have an Account please Sign up here</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
 
</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</html>

<?php
    include("database.php");
    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $insert = "insert into students(fullname,username,password) values('$fullname', '$username','$password')";                                                                                                                                                                                                                                                               

        $query=mysqli_query($conn, $insert);

        $sql = "SELECT * FROM students WHERE username = '$username'";
     
        if($query){

            ?>
            <script>
            
            swal({
                title: "success",
                text: "you have an account!",
                icon: "success",
                button: "Done",
              });
            </script>

            <?php
        }
    }
    

?>

