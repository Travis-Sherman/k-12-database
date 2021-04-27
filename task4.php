<?php
    
    $connect = mysqli_connect("localhost", "morehouse", "test12345", "k12");
    
    if(!$connect)
    {
        die('Could not connect' . mysqli_connect_error());
    }
    
    if(isset($_POST['submit']))
   {
        $fn = $_POST['first_name'];
        $ln = $_POST['last_name'];
        $ea = $_POST['email_address'];
        $al = $_POST['allergies'];
        $gl = $_POST['grade_level'];
        $ec = $_POST['emergency_contact'];
        $ps = $_POST['password'];

        $conn = mysqli_connect("localhost", "morehouse","test12345", "k12");
        // Check connection
        if($conn == false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        $query = "INSERT INTO student (first_name,last_name,email_address,grade_level,emergency_contact,password) VALUES ('$fn','$ln','$ea',$gl,$ec,'$ps') ";
        $query2 = "INSERT INTO student_records(Allergies) VALUES ('$al')";

        if(mysqli_query($conn, $query)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

        }

        if(mysqli_query($conn, $query2)){

        } 
        // Close connection
        mysqli_close($conn);
    }
    
    
  ?>


    
  
    <form action="task4.php" method="POST" name="form1">
    <table width="25%" >
     <tbody><tr> 
    <td>Student First Name</td>
    <td><input type="text" name="first_name"></td>
    </tr>
    <tr> 
    <td> Student Last Name </td>
    <td><input type="text" name="last_name"></td>
    </tr>
    <tr> 
    <td> Sudent Email Address </td>
    <td><input type="text" name="email_address"></td>
    </tr>
    <tr> 
    <td> Kid Alergies(y=1,n=2) </td>
    <td><input type="text" name="allergies"></td>
    </tr>
    <tr>
    <td>Grade Level </td>
    <td><input type="text" name="grade_level"></td>
    </tr>
    <tr>  
    <td>Emergency Contact# </td>
    <td><input type="text" name="emergency_contact"></td>
    </tr>
    <tr> 
    <td>Student Password </td>
    <td><input type="text" name="password"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Add"></td>
    </tr>
                
            </tbody></table>
            </form>


<html>
<?php
