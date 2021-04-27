<?php
    
    $connect = mysqli_connect("localhost", "morehouse", "test12345", "k12");
    
    if(!$connect)
    {
        die('Could not connect' . mysqli_connect_error());
    }
    

    $result = mysqli_query($connect,"SELECT * FROM homeroom WHERE student_count <= 30");
    

    $tuitionPrice = 250000;
    echo "The price to attend the private school is "
    . $tuitionPrice . "<br>";
    echo "<br>";
   
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
    {
        echo "Homeroom number: " . $row["room_number"] . "<br>";
        echo "Teacher name: " . $row["teacher_name"] . "<br>";
        echo "Grade Level: " . $row["grade_level"] . "<br>";
        echo "Spots Remaining: " . 30 - $row["student_count"] . "<br>";
        echo "<br>";

    }
        
    

    $result = mysqli_query($connect,"SELECT * FROM class");
    while($row = mysqli_fetch_array(($result), MYSQLI_BOTH))
    {
        if($row["school_start"] == '07:00:00')
        {
            echo "Elementary School Times: " . "<br>";
            echo "School begins at: " . $row["school_start"] . "<br>";
            echo "School ends at: " . $row["school_end"] . "<br>";
            echo "Lunch time: " . $row["lunch_time"] . "<br>";
            echo "Recess time: " . $row["recess_time"] . "<br>";
            echo "<br>";
        }
        
    } 

    $result = mysqli_query($connect,"SELECT * FROM class");
    while($row = mysqli_fetch_array(($result), MYSQLI_BOTH))
    {
        if($row["school_start"] == '08:00:00')
        {
            echo "High School Times: " . "<br>";
            echo "School begins at: " . $row["school_start"] . "<br>";
            echo "School ends at: " . $row["school_end"] . "<br>";
            echo "Lunch time: " . $row["lunch_time"] . "<br>";
            echo "Recess time: " . $row["recess_time"] . "<br>";
            echo "<br>";
        }
    }

    $result = mysqli_query($connect,"SELECT * FROM class");
    while($row = mysqli_fetch_array(($result), MYSQLI_BOTH))
    {
        if($row["school_start"] == '09:00:00')
        {
            echo "Middle School Times: " . "<br>";
            echo "School begins at: " . $row["school_start"] . "<br>";
            echo "School ends at: " . $row["school_end"] . "<br>";
            echo "Lunch time: " . $row["lunch_time"] . "<br>";
            echo "Recess time: " . $row["recess_time"] . "<br>";
            echo "<br>";
        }
    }

    mysqli_close($connect);

?>

