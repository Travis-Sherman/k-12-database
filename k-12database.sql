CREATE DATABASE k12;
CREATE TABLE `k12`.`student` ( `student_id` INT NOT NULL AUTO_INCREMENT , `bank_provider` VARCHAR(255) NOT NULL , `guardian_ssid` INT NOT NULL , `guardian_phone` INT NOT NULL , `emergency_contact` INT NOT NULL , `first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , `grade_level` INT NOT NULL , `email_address` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL, PRIMARY KEY (`student_id`)) ENGINE = InnoDB;
 
CREATE TABLE `k12`.`student_records` ( `student_ssid` INT NOT NULL , `medical provider` VARCHAR(255) NOT NULL , `Allergies` BOOLEAN NOT NULL , `Guardian_email` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;


CREATE TABLE `k12`.`class` ( `lunch_time` TIME NOT NULL , `recess_time` TIME NOT NULL , `school_end` TIME NOT NULL , `school_start` TIME NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `k12`.`homeroom` ( `grade_level` INT NOT NULL , `student_count` INT NOT NULL , `room_number` VARBINARY(1) NOT NULL , `teacher_name` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;
