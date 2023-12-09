]<?php
    include("config.php");
    if(isset($_POST['submit'])){
      $teacher = $_POST['teacher'];
      $section = $_POST['section'];
      $course = $_POST['course'];
      $course_time = $_POST['course_time'];
      $course_date = $_POST['course_date'];
      $room = $_POST['room'];
        
        $insert = "insert into `section a`(teacher,section,course,course_time,course_date,room) values('$teacher', '$section','$course','$course_time','$course_date','$room')";                                                                                                                                                                                                                                                               

        $query=mysqli_query($conn, $insert);

        $sql = "SELECT * FROM `section a` WHERE section = '$section'";
        header('location:..//customize.php#t2');

    }
    

?>