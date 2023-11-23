<?Php
    if(isset($_POST["submit1"])){
        header('location:section.php');
    }
    if(isset($_POST["submit2"])){
        header('location:section2.php');
    }
    if(isset($_POST["submit3"])){
        header('location:section3.php');
    }
    if(isset($_POST["submit4"])){
        header('location:section4.php');
    }
    if(isset($_POST["logout"])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College of Engineering</title>
    <link rel="stylesheet" href="year level.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="" method="post">
                <h1>College of Engineering</h1>
                <div class="frame">

                    <button class="custom-btn btn-7" name="submit1"><span>First Year</span></button>
                    <button class="custom-btn btn-7" name="submit2"><span>Second Year</span></button>
                    <button class="custom-btn btn-7" name="submit3"><span>Third Year</span></button>
                    <button class="custom-btn btn-7" name="submit4"><span>Fourth Year</span></button>

                    </div>

                    <button class="custom-btn btn-12" name="logout"><span>bye😊</span><span>logout</span></button>
            </form>
            
        </div>
        
    </div>
    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    

</body>
</html>