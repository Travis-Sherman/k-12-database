<?php
$connect = mysqli_connect("localhost", "morehouse", "test12345", "k12");
    
if(isset($_POST['submit']))
   {
    $conn = mysqli_connect("localhost", "morehouse","test12345", "k12");
 
    // Check connection
    if($conn === false){
     die("ERROR: Could not connect. " 
         . mysqli_connect_error());
    }
    
    $gl = $_POST["grade_level"];
    
    $sql = "INSERT INTO homeroom(grade_level,student_count,room_number,teacher_name) VALUES (3,5,1,'Dr Philip') ";
    $query2 = "INSERT homeroom(grade_level,student_count,room_number,teacher_name) VALUES (3,5,b,'Dr Water') ";
    $query3 = "INSERT homeroom(grade_level,student_count,room_number,teacher_name) VALUES (12,5,a,'Dr Watkins') ";
    $query4 = "INSERT homeroom(grade_level,student_count,room_number,teacher_name) VALUES (12,5,b,'Dr Chnug') ";
    $query5 = "INSERT homeroom(grade_level,student_count,room_number,teacher_name) VALUES (6,a,b,'Dr Leaf') ";
    $query6 = "INSERT homeroom(grade_level,student_count,room_number,teacher_name) VALUES (6,5,b,'Dr Tree') ";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      }
       else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   }
 
?>

 <form action="index3.php" method="POST" name="form3">
 <table width="25%">
  <tbody><tr> 
 <td>Input Sudent Grade Level(elementary=3,middle=6,high=12) </td>
 <td><input type="text" name="grade_level"></td>
 </tr>
 <tr> 
 
 <td></td>
 <td><input type="submit" name="submit" value="Add"></td>
 </tr>
             
         </tbody></table>
         </form>



<html>







