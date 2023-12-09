<!-- dti medyo nakakaluto na to at sama sama na lahat bali pag gumawa ka ng databse ayusin mo n lng yung mga naka php  -->


<!-- my mga notes nmn ako dto na nilagay nahapin mo n lng ganto lng yun kulay green 
tapos delete mo n lng pag nabasa mo na -->
<?php

@include 'database.php';


    if(isset($_POST["back"])){
        header('location:.php');
    }
    if(isset($_POST["logout"])){
        header('location:login.php');
    }

if(isset($_POST['submit'])){

   $borrowers= $_POST['borrowers'];
   $role = $_POST['role'];
   $name = $_POST['name'];
   $department = $_POST['department'];
   if (empty($borrowers) || empty($role ) || empty($name) || empty($department)){
    $message[] = 'please fill out all';
    }else{
      $insert ="INSERT INTO `borrowers_deatils`(`borrowers`, `role`, `name`, `department`) VALUES ('$borrowers',' $role','$name','$department')";
      $upload = mysqli_query($conn,$insert);
   }

}
if(isset($_POST['submit1'])){

   $book= $_POST['book'];
   $bname = $_POST['enter'];
   $author = $_POST['author'];
   $quantity = $_POST['quantity'];
   if (empty($borrowers) || empty($role ) || empty($name) || empty($department)){
    $message[] = 'please fill out all';
    }else{
      $insert ="INSERT INTO `book_details`(`book`, `enter`, `author`, `quantity`) VALUES ('$book','$bname','$author','$quantity')";
      $upload = mysqli_query($conn,$insert);
   }

}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Navigation page CSS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link rel="stylesheet" href="panel.css">

</head>
<body>
<div class="ct" id="t1">
 <div class="ct" id="t2">
   <div class="ct" id="t3">
     <div class="ct" id="t4">
       <div class="ct" id="t5">
        <div class="ct" id="t6">
          <div class="ct" id="t7">
            <div class="ct" id="t8">
              <div class="ct" id="t9">
               <div class="ct" id="t10">
                <section>  
                <ul>
                  <a href="#t1"><li class="icon fa fa-home" id="uno"> <br>Home Page</li></a>
                  <a href="#t2"><li class="fa fa-user fa-2x" id="dos"> <br>Profile</li></a>
                  <a href="#t3"><li class="fa fa-comments fa-2x" id="tres"> <br>Manage book</li></a>
                  <a href="#t4"><li class="fa fa-user fa-2x" id="cuatro"> <br>Manage Barrowers</li></a>
                  <a href="#t5"><li class="fa fa-film fa-2x" id="lima"><br>Issue Books</li></a>
                  <a href="#t6"><li class="fa fa-book fa-2x" id="anim"><br>Return Book</li></a>
                  <a href="#t7"><li class="fa fa-cogs fa-2x" id="pito"><br>Book Record</li></a>
                  <a href="#t8"><li class="fa fa-map-marker fa-2x" id="walo"><br> Defaulter List</li></a>
                  <a href="login.php"><li class="fa fa-user fa-2x" id="10">lagout</li></a>
                </ul>



                <!-- home page -->
                  <div class="page" id="p1">
                    <li class="icon fa fa"><span class="title">
                      
                      <div class="container">
                      <div class="panel post">
                        <a href="javascript:void();"><span>8 </span>NO. of Books</a>
                      </div>
                      <div class="panel comment">
                        <a href="javascript:void();"><span>39 </span>NO. of Teacher</a>
                      </div>
                      <div class="panel page">
                        <a href="javascript:void();"><span>5 </span>NO. of students</a>
                      </div>
                      <div class="panel user">
                        <a href="javascript:void();"><span>4 </span>issued Books</a>
                      </div>
                      <div class="panel user">
                        <a href="javascript:void();"><span>1 </span>Defaulter List</a>
                      </div>
                    </div>
                    
                    
                    <H2> Borrower's Details</H2>
                    <div class="underline">.</div>
                        <?php
                        
                        $select = mysqli_query($conn, "SELECT * FROM `borrowers_deatils`");
      
                        ?>
                          <div class="display1">
                        <div class="scroll">

                            
                            <table class="display-table1">
                              
                                <thead>
                                <tr>
                                <th>Barrower's ID</th>
                                <th>role</th>
                                <th>Name</th>
                                <th>Department</th>
           
                                </tr>
                                </thead>
                                <?php while($row = mysqli_fetch_assoc($select)){ ?>
                                <tr>
                                  
                                  <td><?php echo $row['borrowers']; ?></td>
                                  <td><?php echo $row['role']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['department']; ?></td>
                                  
                                </tr>
                                <?php } ?>
                              </table><br>
                            
                          </div>

                          <H1> Book Details</H1>
                          <div class="underlinee">.</div>
                         <?php
                        
                        $select = mysqli_query($conn, "SELECT * FROM `book_details`");
                        
                        ?>
                          <div class="scroll">
                            <table class="display-table1">
                           
                            <thead>
                            <tr>
                            <th>Book ID</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Quantity</th>
       
                            </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                            <tr>
                                <td><?php echo $row['book_id']; ?></td>
                                <td><?php echo $row['book_name']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>  
                              </tr>
                            </div>
                           <?php } ?>
                           </table><br>
                      </div>
                    </span><span class="hint"></span></li>
                    <img src="pic/Return Books.png" alt="">
                  </div>

              
<!--profile -->
                  <div class="page" id="p2">
                      <div class="box4_1">

                        
                      </div>
                      <div class="box4">

                        <h6 style="font-size: 53px;">MY Profile</h6>
                        <h6>Full Name:<span>eman</span></h6>
                        <div class="underline1">.</div>
                        <h6>Username:<span>eman</span></h6>
                        <div class="underline1">.</div>
                        <h6>Email:<span>eman</span></h6>
                        <div class="underline1">.</div>
                        <h6>Contact Number:<span>eman</span></h6>
                        <div class="underline1">.</div>
                      </div>
                      
                    </span></li>
                    <img src="pic/Manage Teachers.png" alt="">
                  </div>  



                  
<!-- manage book -->

                  <div class="page" id="p3">
                    <li class="icon fa fa"><span class="title">
                          <div class="box1">

                              <form action="" method="post" >
                                <div class="box2">
                                  
                                  <input type="text" placeholder="Enter Book ID" name="book" class="box" required>
                                  <input  class="box" placeholder="Enter Book Name" name="bname" required>
                                  <input  class="box" placeholder="Enter Author Name" name="author" required>
                                  <input type="text" placeholder="Enter Subject Area" name="subject" class="box"  required>
                                  <input type="text" placeholder="Enter Quantity" name="quantity" class="box"  required><br>
                                  <input style=" width: 10rem; height: 5rem; " type="submit" class="btn"  name="submit1" value="add">
                                  <a href="..//customize.php#t2" class="btn">go back!</a>
                                </form>
                                </div>
                          </div>
                          <div class="box3">

                            <H3> Manage book</H3>
                           <?php
                          
                          $select = mysqli_query($conn, "SELECT * FROM `book_details`");
                          
                          ?>
                          <div style=" margin-left: -18rem;" class="display1">
                            <div  style="position: absolute;"class="scroll">
                              <table class="display-table1">
                             
                              <thead>
                              <tr>
                              <th>Book ID</th>
                              <th>Book Name</th>
                              <th>Author</th>
                              <th>Quantity</th>
                              <th>action</th>
         
                              </tr>
                              </thead>
                              <?php while($row = mysqli_fetch_assoc($select)){ ?>
                              <tr>
                                <td><?php echo $row['book_id']; ?></td>
                                <td><?php echo $row['book_name']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>   
                                <td>
                              <a href="first year/section_update.php?edit=<?php echo $row['id']; ?>" class="btn"> update </a>
                              <a href="sectionDELETE.php?delete=<?php echo $row['id']; ?>" class="btn">  delete </a>
                          </td>
                                </tr>
                              </div>
                             <?php } ?>
                             </table><br>
                        </div>
                          </div>
                              </div>
                      </span></li>

                      <img src="pic/Add and Delete books.png" alt="">
                    </div>

<!-- manage borrowers-->
                  <div class="page" id="p4">
                  <li class="icon fa fa"><span class="title">
                          <div class="box1">

                              <form action="" method="post" >
                                <div class="box2">
                                  
                                  <input  type="text" placeholder="Enter borrowers ID" name="borrowers" class="box" required>
                                  <input list="COE" class="box" placeholder="Enter borrowers Role" name="role" required>
                                      <datalist id="COE">
                                        <option value="Teacher">Teacher</option> 
                                        <option value="Studebts">Student</option> 
                                      </datalist>
                                  <input type="text" placeholder="Enter borrowers IName" name="name" class="box"  required>
                                 
                                  <input list="SECTION" class="box" placeholder="Enter Department Name" name="department" required>
                                      <datalist id="SECTION">
                                        <option value="CEO">CEO</option> 
                                        <option value="CTED">CTED</option> 
                                        <option value="CTHM">CTHM</option> 
                                        <option value="CAS">CAS</option> 
                                      
                                      </datalist>
                                      <input style=" width: 10rem; height: 5rem; " type="submit" class="btn"  name="submit" value="add">
                                  <a href="..//customize.php#t2" class="btn">go back!</a>
                                </form>
                                </div>
                          </div>
                          <div class="box3">

                            <H3> Manage borrowers</H3>
                           <?php
                          
                          $select = mysqli_query($conn, "SELECT * FROM `borrowers_deatils`");
                          
                          ?>
                          <div style=" margin-left: -18rem;" class="display1">
                            <div  style="position: absolute;"class="scroll">
                            <table class="display-table1">
                              
                              <thead>
                              <tr>
                              <th>Barrower's ID</th>
                              <th>role</th>
                              <th>Name</th>
                              <th>Department</th>
                              <th>action</th>
         
                              </tr>
                              </thead>
                              <?php while($row = mysqli_fetch_assoc($select)){ ?>
                              <tr>
                                
                              <td><?php echo $row['borrowers']; ?></td>
                                  <td><?php echo $row['role']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['department']; ?></td>
                                  <td>
                              <a href="first year/section_update.php?edit=<?php echo $row['id']; ?>" class="btn"> update </a>
                              <a href="sectionDELETE.php?delete=<?php echo $row['id']; ?>" class="btn"> delete </a>
                          </td>
                                
                              </tr>
                             <?php } ?>
                             </table><br>
                        </div>
                          </div>
                              </div>
                      </span></li>

                      <img src="pic/Manage Teachers.png" alt="">
                    </div>
                  </span></li>
                  </div>  




                  <div class="page" id="p5">
                    <li class="icon fa fa-home"><span class="title">Twitte</span><span class="hint"></span></li>   
                  </div>
                  <div class="page" id="p6">
                    <li class="icon fa fa-keyboard-o"><span class="title">hahahhaa</span></li>
                  </div>  
                  <div class="page" id="p7">
                    <li class="icon fa fa-coffee"><span class="title">Coffee</span></li>
                  </div>
                  <div class="page" id="p8">
                  <li class="icon fa fa-twitter"><span class="title">Twitter</span><span class="hint"><a href="https://twitter.com/jevandamanik" target="_blank">Follow me on Twitter</span></li>
                  </div>  
                 
                </section>
                      
                </div>
              </div>
            </div>
         </div>
         </div>
       </div>
     </div>
     </div>
   </div>
  </div>
  
</body>


<!--main css -->
<!--wag mo na ito galawin ahahah-->
<style>
* {
  transition: all 500ms ease-out;
  -webkit-transition: all 500ms ease-out;
}

html, body, section, .page {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: all 1s cubic-bezier(.5, -0.005, 0.2, 1) !important;
  -webkit-transition: all 1s cubic-bezier(.5, -0.005, 0.2, 1) !important;
  color: #fff;
  background: #374046;
  overflow: hidden;
}

section {
  width:400%;  
}

.page {

  position: absolute;
}
img{
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;

}


#p1 {
  left: 10%;
  
}

#p2 {
  left: 100%;
  background: #FF5722;
}

#p3 {
  left: 200%;
}

#p4 {
  left: 300%;
  background: #3498db;
}
#p5 {
  left: 300%;
  background: #FF5722;
}
#p6 {
  left: 300%;
  background: #3498db;
}
#p7 {
  left: 300%;
  background: #FF5722;
}
#p8 {
  left: 300%;
  background: #3498db;
}
#p9 {
  left: 300%;
  background: #593C1F;
}

ul {
 position: fixed; 
 z-index: 1;
}
#t1:target .page#p1 {
    transform: translateX(0);
}
#t2:target .page#p2 {
    transform: translateX(-90%);
}
#t3:target .page#p3 {
    transform: translateX(-190%);
}
#t4:target .page#p4 {
    transform: translateX(-290%);
}
#t5:target .page#p5 {
    transform: translateX(-290%);
}
#t6:target .page#p6 {
    transform: translateX(-290%);
}
#t7:target .page#p7 {
    transform: translateX(-290%);
}
#t8:target .page#p8 {
    transform: translateX(-290%);
}



#t2:target .page#p1, 
#t3:target .page#p1,
#t4:target .page#p1, 
#t4:target .page#p1, 
#t5:target .page#p1, 
#t6:target .page#p1, 
#t7:target .page#p1, 
#t8:target .page#p1 {
  background: black;
}

#t2:target .page#p1 .icon, 
#t3:target .page#p1 .icon,
#t4:target .page#p1 .icon,
#t5:target .page#p1 .icon ,
#t6:target .page#p1 .icon ,
#t7:target .page#p1 .icon ,
#t8:target .page#p1 .icon{
  -webkit-filter: blur(3px);
  filter: blur(3px);
}

.icon {
  color: #fff;
  font-size: 32px;
  display: block;
}

ul .icon:hover {
  opacity: 0.6;
}

#p1 .icon .title {
  margin-bottom: 20px;
}

#t2:target ul .icon,
#t3:target ul .icon,
#t4:target ul .icon,
#t5:target ul .icon,
#t6:target ul .icon,
#t7:target ul .icon,
#t8:target ul .icon{
  transform: scale.6; 
  transition-delay: .25s;
}

#t2:target #dos {
  transform: scale(1.2) !important;
}

#t3:target #tres {
  transform: scale(1.2) !important;
}

#t4:target #cuatro {
  transform: scale(1.2) !important;
}
#t5:target #lima {
  transform: scale(1.2) !important;
}
#t6:target #anim {
  transform: scale(1.2) !important;
}
#t7:target #pito {
  transform: scale(1.2) !important;
}
#t8:target #walo {
  transform: scale(1.2) !important;
}

ul {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  width: 10%;
  padding: 0;
  text-align: center;
  background-color: rgb(0, 99, 44);
 }

ul li {
  margin: 15px 0;
  color: #FFF;
}

a {
  text-decoration: none;
  font-family: open sans, sans-serif;
}

.title, .hint {
  font-family: open sans, sans-serif;
  display: block;
}

.title {
  font-size: 38px;
}

.hint {
  font-size: 13px;
}

.hint a {
  color: #EFFF06;
  transition: all 250ms easet-out;
}

.hint a:hover {
  color: #FFF;
}

.page .icon {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 10%;
  left: 0;
  width: 270px;
  height: 170px;
  margin: auto;
  text-align: center;
  font-size: 80px;
  transform: translateX(360%);
  line-height: 1.3;
}

.page#p1 .icon {
  height: 220px;
}

.page#p1 .icon {
  transform: translateX(0) !important;
}

#t2:target .page#p2 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t3:target .page#p3 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t4:target .page#p4 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t5:target .page#p4 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t6:target .page#p4 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t7:target .page#p4 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t8:target .page#p4 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

.credit{
	position: absolute;
	bottom: 0;
	width: 100%;
	text-align: center;
	font-size: 10px;
}

.credit a {
	color: #fff
}
</style>
</html>






<!--home page -->

<style>


  .display1{
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid var(--black);
   width: 90rem;
    border-radius: 10px;
    padding-left: 20px;
    color: #ffffff;
    margin:2rem 0;
    margin-left: -35rem;
    margin-top: -5rem;
  }

.underline{
  width: 90rem;
  font-size: 5px;
  position: absolute;
  left: -35rem;
  margin-top: -30px;
  background-color: #fff;
  
}
.underlinee{
  width: 90rem;
  font-size: 5px;
  position: absolute;
  left: -35rem;
  margin-top: 4rem;
  background-color: #fff;
  
}
H2{
   border-radius: 10px;
   color: #ffffff;
   position: absolute;
   top: -7rem;
   left: -35rem;
   font-size: 35px;
}
H1{
   border-radius: 10px;
   color: #ffffff;
   position: absolute;
   top: 14.5rem;
   left: -35rem;
   font-size: 35px;
}
 
 .display1 .display-table1{
    width: 70rem;
    margin-left: 150px;
    
    
 }
 

 .display1 .display-table1 th{
  color: #fff;
  background: rgb(69, 121, 2);
    padding:0.5rem;
    font-size: 1.3rem;
 }
 
 
 .display1 .display-table1 td{
    padding:0.5rem;
    background-color: #fff;
    color: #000000;
    font-size: 1.2rem;
    border-bottom: var(--border);

 }
 
 .display1 .display-table1 .btn:first-child{
    margin-top: 0;
 }
 
 .display1 .display-table1 .btn:last-child{
    background: crimson;
 }
 
 .display1 .display-table1 .btn:last-child:hover{
    background: var(--black);
 }
.scroll {
  margin-top: 80px;
    height: 15rem;
    overflow-y: scroll;
}



</style>



<!--panel css -->
<style>
 .container {
  position: absolute;
  display: grid;
  margin-left: -40rem;
  margin-top: -17rem;
  width: 500px;
  grid-template-columns: repeat(5, 1fr);
}
.panel {
  box-sizing: border-box;
  position: relative;
  display: inline-block;
  width: 300px;
  height: 160px;
  margin: 10px;
  font-size: 32px;
  font-weight: 600;
  color: #fff;
  overflow: hidden;
  border-radius: 8px;
}
.panel a {
  position: relative;
  display: block;
  padding: 12px 25px 25px 25px;
  color: #fff;
  text-decoration: none;
  z-index: 2;
}
.panel a span {
  display: block;
  font-size: 96px;
  font-weight: 700;
  line-height: 96px;
}
.panel:after {
  position: absolute;
  font-family: FontAwesome;
  color: #000000;
  z-index: 1;
  transition: all 0.5s;
  line-height: normal;
}
.panel.post {
  background-color: #b8aa0e;
}
.panel.post:after {
  content: "\f08d";
  font-size: 200px;
  color: #a5980d;
  top: 45px;
  right: 60px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.panel.post:hover:after {
  top: 8px;
}
.panel.comment {
  background-color: #0377c0;
}
.panel.comment:after {
  content: "\f075";
  font-size: 180px;
  color: #036bac;
  top: 30px;
  right: 35px;
}
.panel.comment:hover:after {
  top: -5px;
}
.panel.page {
  background-color: #279824;
}
.panel.page:after {
  content: "\f15c";
  font-size: 160px;
  color: #238820;
  top: 62px;
  right: 39px;
}
.panel.page:hover:after {
  top: 24px;
}
.panel.user {
  background-color: #fc1c3e;
}
.panel.user:after {
  content: "\f007";
  font-size: 200px;
  color: #ec0326;
  top: 45px;
  right: 35px;
}
.panel.user:hover:after {
  top: 7px;
}
.panel:hover:after {
  transition: all 0.5s;
}
</style>





<!--manage book at barrowers  -->
<style>
  .box1{
    position: absolute;
    left: -50rem;
    top: -25rem;
    width: 40rem;
    height: 100vh;
    background: rgba(2, 182, 77, 0.623);
  }
  input::placeholder{
    color: #fff;
  }
  .box2{
    margin-top: 10rem;
  }
  input{
    width: 33rem;
    background-color: transparent;
    color: #fff;
    border-color: #fff;
    border-width: 5px;
    margin: 10px;
    padding: 20px;
    border-radius: 50px;
  }
  H3{
   border-radius: 10px;
   color: #ffffff;
   position: absolute;
   top: -10rem;
   left: 10rem;
   width: 500px;
   font-size: 50px;
}
</style>


<!--profile ng css -->
<style>
  .box4{
    width: 65rem;
    height: 40rem;
    background-color:rgba(255, 252, 252, 0.788);
    position: absolute;
    top: 50%;
    left: 58%;
    transform: translate(-50%, -50%);
    border-radius: 20px;
  }
  .box4_1{
    width: 30rem;
    height: 40rem;
    background-color:rgba(255, 252, 252, 0.788);
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%, -50%);
    border-radius: 20px;
  }
 h6{
    color: rgb(0, 73, 33);
    margin-top: 55px;
    font-size: 35px;
    margin-bottom: 10px;
    display: grid;
    justify-content: start;
    padding-left: 5rem;

  }
 h6 span{
    color: rgb(0, 73, 33);
    font-size: 30px;
    margin: 0;
    position: absolute;
    left: 30rem;
  }
  .underline1{
    width: 55rem;
    margin-left: 5rem;
    font-size: 5px;
    left: -35rem;
    background-color: rgb(145, 145, 145);
    color: transparent;
  }
</style>