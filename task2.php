<?php
if(isset($_POST['submit']))
{
    $conn = mysqli_connect("localhost", "morehouse","test12345", "k12");
 
    // Check connection
    if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
    }
    $gp = $_POST['guardian_phone'];
    $bp = $_POST['bank_provider'];
    $gssid = $_POST['guardian_ssid'];
    $ssid = $_POST['student_ssid'];
    $mp = $_POST['medical_provider'];
    $ge = $_POST['Guardian_email'];
    $si = $_POST['student_id'];
    $query22 = "INSERT INTO student_records (student_ssid,medical_provider,Guardian_email) VALUES ('$ssid','$mp','$ge') ";
    $query23 = "INSERT INTO student(bank_provider,guardian_ssid,guardian_phone,student_id) VALUES ('$bp','$gssid','$gp','$si')";

    if(mysqli_query($conn, $query22) && (mysqli_query($conn, $query23))){
        echo "parent records data stored"; 
    
    }
    else{
        echo "fuck";
    }

    
    // Close connection
    mysqli_close($conn);
}


?>

 <form action="task2.php" method="POST" name="form2">
 <table width="25%">
  <tbody><tr> 
 <td>Guardian Phone</td>
 <td><input type="text" name="guardian_phone"></td>
 </tr>
 <tr> 
 <td> Bank Provider</td>
 <td><input type="text" name="bank_provider"></td>
 </tr>
 <tr> 
 <td> Guardian SSID </td>
 <td><input type="text" name="guardian_ssid"></td>
 </tr>
 <tr> 
 <td>Student SSID </td>
 <td><input type="text" name="student_ssid"></td>
 </tr>
 <tr> 
 <td>Medical Provider </td>
 <td><input type="text" name="medical_provider"></td>
 </tr>
 <tr> 
 <td>Guardian Email# </td>
 <td><input type="text" name="Guardian_email"></td>
 </tr>
 <tr> 
 <td>Student Id </td>
 <td><input type="text" name="student_id"></td>
 </tr>
 <tr> 
 <td></td>
 <td><input type="submit" name="submit" value="Add"></td>
 </tr>
             
         </tbody></table>
         </form>



<html>


