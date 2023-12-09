
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Registration Form</title>
</head>
<body>
    <header>

    </header>
    <section><br>
        <div class="box">
            <div class="container">
                <div class="title">Registration</div>
                <form action="" method= "post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" id="fullname" name="fullname" placeholder="Enter name" required>
                        </div>

                        <div class="input-box">
                            <span class="details">User Name</span>
                            <input type="text" id="username" name="username" placeholder="Enter username" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" id="email" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" id="phonenumber" name="phonenumber" placeholder="Enter phone number" required>
                        </div>

                        <div class="input-box">
                            <span class="details">ID Number</span>
                            <input type="text" id="idnumber" name="idnumber" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Department</span>
                            <input type="text" id="department" name="department" placeholder="Enter phone department" required>
                        </div>

                        <div class="input-box">
                            <label for="password" class="details">Password</label>
                            <input type="text" id="password" name="password" placeholder="Enter password" required>
                        </div>

                        <div class="input-box">
                            <label for="cnfrm-password" class="details">Confirm Password</label>
                            <input  type="text" id="cnfrm-password" name="re_password" placeholder="Confirm password" required>
                        </div>
                    </div>

                    <div class="role-details">
                    <input type="radio" name="role" id="dot-1" value="Admin">
                    <input type="radio" name="role" id="dot-2" value="Teacher">
                        <span class="role-title">Role</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="role">Admin</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="role">Teacher</span>
                            </label>
                        </div>

                    </div>
                    <div class="button"> 
                    <input name="submit" type="submit"  value="SUBMIT"/>
                    <a href="login.php" style="margin-left: 35px; ">  go back!</a>
                    </div>

                </form>
                
            </div>
        </div>
    </section>
    </div>
        </div>
    </header>


    <?php

include("logindatabase.php");
if(isset($_POST["back"])){
    header('location:login.php');
}
    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $idnumber = $_POST['idnumber'];
        $department = $_POST['department'];
        $password = $_POST['password'];
        $re_pass =($_POST['re_password']);
        
        $insert = "INSERT INTO `login`(`fullname`, `username`, `email`, `phonenumber`, `idnumber`, `department`, `password`)
                   VALUES ('$fullname','$username','$email','$phonenumber','$idnumber','$department','$password')";

        $query = mysqli_query($conn, $insert);

        $sql = "SELECT * FROM login WHERE username = '$username'"; 

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

 

</body>

  <style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

body {
    background-image: url(LoginPage.png);
    background-repeat: no-repeat;
    background-size: cover;
}

.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 90px;
text-align: center;
vertical-align: middle;
font-size:30px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
background: darkgreen;
border-right:1px solid darkgreen;
position:absolute;
top:0;
bottom:10px;
height:99%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform: translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#999;
 font-family: Arial, Helvetica, sans-serif;
font-size: 23px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color: darkgreen;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: Arial, Helvetica, sans-serif;
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}

  </style>
    </html>
</body>
</html>



<style>

    
    body
    {
        height: 833px;
        width: 100%px;
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        padding: 0;
        margin: 0;
        background-image: url(LoginPage.png);
    background-repeat: no-repeat;
    background-size: cover;
    }
    header
    {
        height: 10%;
        width: 100%;
        background-color: rgb(21, 102, 21);
    }
    section
    {
        height: 100%;
        width: 100%;
        background-image: url(profilebg.png);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .box
    {
        position: relative;
        float: left;
        height: 80%;
        width:35%;
        margin: auto 34%;
        border-radius: 2%;
        background: linear-gradient(90deg, rgb(4, 235, 196), rgb(7, 235, 140), rgba(11, 238, 4, 0.89));
        display: flex;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    .container
    {
        background: white;
        max-width: 800px;
        width: 93%;
        height: 92%;
        border-radius: 2%;
        padding-left: 25px;
        padding-top: 30px;
    }
    .container .title
    {
        font-size: 20px;
        font-weight: 700;
        position: relative;
        color: rgb(21, 102, 21);
    
    }
    .container .title::before
    {
        content: '';
        position: absolute;
        height: 2px;
        width: 25px;
        background: linear-gradient(90deg, rgb(4, 235, 196), rgb(7, 235, 140), rgba(11, 238, 4, 0.89));
        left: 0;
        bottom: 0;
    }
    .container form .user-details
    {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    form .user-details .input-box
    {
        margin: 20px 0 12px 0;
        width: calc(100% / 2 - 20px);
        margin-bottom: 10px;
        color: rgb(21, 102, 21);
        font-size: 14px;
    
    }
    .user-details .input-box .details
    {
        margin-left: 15px;
        display: block;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .user-details .input-box input
    {
        height: 30px;
        width: 80%;
        outline: none;
        border-radius: 7px;
        border: 1px solid #cacc;
        padding-left: 15px;
        font-size: 13px;
        transition: all 0.3 ease;
    }
    .user-details .input-box input :focus
    .user-details .input-box input :valid
    {
        border: gray;
    }
    form .role-details .role-title
    {
        font-size: 18px;
        font-weight: 700;
        color: rgb(21, 102, 21);
        margin-left: 40px;
    }
    form .role-details .category
    {
        display: flex;
        width: 80%;
        margin: 15px;
        margin-top: 0%;
        justify-content: space-evenly;
        color: rgb(21, 102, 21);
        font-size: 13px;
        font-weight: 700;
    }
    form .role-details .category label
    {
        display: flex;
        align-items: center;
    }
    form .role-details .category .dot
    {
        height: 10px;
        width: 10px;
        background: white;
        border-radius: 50%;
        margin-right: 5px;
        border: 3px solid rgb(21, 102, 21);
        transition: all 0.3s ease;
    
    }
    #dot-1:checked ~ .category label .one,
    #dot-2:checked ~ .category label .two
    {
        border-color: rgb(21, 102, 21);
        background: black;
    }
    form input[type="radio"]
    {
        display: none;
    }
    form .button input
    {
        margin: 10px;
        height: 35px;
        width: 80%;
        outline: none;
        color: white;
        border: none;
        font-size: 18px;
        font-weight: 600;
        border-radius: 14px;
        margin-left: 40px;
        background: linear-gradient(90deg, rgb(4, 235, 196), rgb(7, 235, 140), rgba(11, 238, 4, 0.89));
    }
    form .button input:hover
    {
        background: linear-gradient(-90deg, rgb(4, 235, 196), rgb(7, 235, 140), rgba(11, 238, 4, 0.89));
    }
    a {
        background:linear-gradient(90deg, rgb(4, 235, 196), rgb(7, 235, 140), rgba(11, 238, 4, 0.89));;
    position: relative;
    color: #fff;
    display: inline-block;
    border-radius: 10px;
    padding: 10px 20px;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    left: 205px;
    margin-top: 10px;
    letter-spacing: 4px
  }
</style>