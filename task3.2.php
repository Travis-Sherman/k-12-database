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

       mysqli_close($connect);
   
   
?>

<!DOCTYPE html>
<html>
   
   <?php foreach($row as $studentId)?>
   <h5><?php if($studentId['bank_provider'] == '')
   {
       echo "Balance is not paid in full" . "<br>";
   }
   else
   {
    echo "Your balance is paid";
   } ?></h5>

</html>