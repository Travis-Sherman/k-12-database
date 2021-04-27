<?php
   
   if(isset($_POST['submit']))
   {
    }
        $student_id = $_POST['student_id'];
        

       $connect = mysqli_connect("localhost", "morehouse", "test12345", "k12");
       if(!$connect)
       {
           die('Could not connect' . mysqli_connect_error());
       }
       
   
       $result = mysqli_query($connect,"SELECT * FROM student WHERE $student_id = student_id");

       $row = mysqli_fetch_all(($result), MYSQLI_BOTH);
       $result2 = mysqli_query($connect,"SELECT * FROM class WHERE school_start = '07:00:00'");
       $result3 = mysqli_query($connect,"SELECT * FROM class WHERE school_start = '08:00:00'");
       $result4 = mysqli_query($connect,"SELECT * FROM class WHERE school_start = '09:00:00'");
       mysqli_close($connect);

       
   
   
?>

<!DOCTYPE html>
<html>
   
   <?php foreach($row as $studentId)?>
   <h5><?php if($studentId['grade_level'] >= 6 && $studentId['grade_level'] <= 8 )
   {
    while($row2 = mysqli_fetch_array(($result4), MYSQLI_BOTH))
    {
        echo "School begins at: " . $row2["school_start"] . "<br>";
        echo "School ends at: " . $row2["school_end"] . "<br>";
        echo "Lunch time: " . $row2["lunch_time"] . "<br>";
        echo "Recess time: " . $row2["recess_time"] . "<br>";
        echo "<br>";
    }
        
   }
   else if($studentId['grade_level'] < 6)
   {
    while($row3 = mysqli_fetch_array(($result2), MYSQLI_BOTH))
    {
        echo "School begins at: " . $row3["school_start"] . "<br>";
        echo "School ends at: " . $row3["school_end"] . "<br>";
        echo "Lunch time: " . $row3["lunch_time"] . "<br>";
        echo "Recess time: " . $row3["recess_time"] . "<br>";
        echo "<br>";
    }
   }
   else if($studentId['grade_level'] > 8)
   {
    while($row4 = mysqli_fetch_array(($result3), MYSQLI_BOTH))
    {
        echo "School begins at: " . $row4["school_start"] . "<br>";
        echo "School ends at: " . $row4["school_end"] . "<br>";
        echo "Lunch time: " . $row4["lunch_time"] . "<br>";
        echo "Recess time: " . $row4["recess_time"] . "<br>";
        echo "<br>";
    }
   }
   ?></h5>

</html>