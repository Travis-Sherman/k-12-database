# k-12-database

Analysis and Specification For K-12 School Web Database Application
Analysis Section

 Brainstormed Application Scenarios 
Travis and Blair are starting a new K-12 private school. As principals we put up a list of 2 homerooms(a or b) for each grade to sign up for. Total of ten kids per home homeroom. We assign teachers and staff
Students are inserted into the grade and homeroom system
Students/parents inquires about room/grade  Staff Answers
students /parents provide student information and make a reservation to be entered in the school system. School  Bill emailed. No refund will be acceptable due to the prestigious school.
Staff assigns homeroom to students. 
students come in to school first day , take roll for class ,teachers give students their ids for school, and everything else for their semester which includes, books and tablets




Tasks List 
Answer Inquiry
Enter Parent Information
Make a reservation for enrollment
Enter student information
Enter specific homeroom and grade
Assign homeroom and grade
Process Check-In
Make student itinerary 
Assign Student Iteneray



Specification Section
Task Name: Answer Inquiry
Task Number: 1
Description: takes inquiry as input
		Returns price to attend, homerooms available , lunch times and more times as requested
Enabling Cond.: information
Frequency: once
Input: EDs: inquiry
	E-types: 
Output:inquiry
Operation: Print(Inquiry, “price to attend private school”);
Direct price;
Print(Inquiry, “More Options?”);
Read(Inquiry, More Options);
i=2;
WHILE More Options DO
 PRINT(Inquiry, “when is lunch time?”);
answer(i);
 Print(Inquiry, “More Options?”);
 Read(Inquiry, More Options);
 i=i+1
ENDWHILE;
Subtasks: none

Task Name: Enter parent Information for enrollment
Task Number: 2
Description: collect parent information and  Insert info into database
Enabling Cond.: parent has valid payment for a student spot. Insert info into database
Frequency: 1 payment per student
Input: E-types: parent , homerooms, payment
	R-types: assigned
Output:inquiry
Operation:
	Get guardian number and email
	Set distinct email for student
	Request medical records
	Check if student has allergies
		(Y/N)
	Get SSN from parents


	
Subtasks: collect payment documentation



Task Name: Make reservation for student enrollment
Task Number: 3
Description:parent has a valid bank and reserves a spot for their student. Therefore student is given grade and room
Enabling Cond.: payment
Frequency: 1 per student
Input: E-types: student, homerooms, payments
Output:inquiry
Operation: 
	If (student balance is the paid)
		if(grade_homeroom A is full)
			Place student in grade_homeroom B
	Else: place student in grade_homeroom A
	
Subtasks: none


Subtasks: none



Task Name: process student check-in(insert student)
Task Number: 4
Description: insert student information to students with their own unique id
Enabling Cond.: payment is successful
Frequency: 1 per student
Input: E-types: student, homeroom
	R-types: assigned
Output: inquiry
Operation:
if(student balance == 0)
Assign student school schedule
Assign student homeroom
Assign books and other essentials
Subtasks: none



Task Name:enter grade_ level for  homerooms A or B in order to display info(only 2 available)
Task Number: 5
Description: enters kids grade level and reveal the homerooms and Returns info about homerooms
Enabling Cond.: receipt of inquiry
Frequency: 1/school year
Input: E-types: homeroom,teacher,size of class
Output: table
Operation: 
	Assign teacher name and  grade level
	Assign class size
	Assign letter A or B
Subtasks: assign teacher to homeroom




Task Name: Return student class itinerary and essentials
Task Number: 6
Description: return student essentials when prompted
Enabling Cond.: inquiry
Frequency: 1 per student
Input:  E-types: homerooms, students
	R-types: assigned
Output: inquiry
Operation: 
if(student = present)
Assign student ID
Assign student personal class schedule
Assign essentials
Subtasks: none


Design:



task number: 1
task name: answer inquiry
* read(inquiry, :homeroom#,:date,:class); */
 Exec sql whenever not found goto endloop;
Exec sql open homerooms; 
while 
EXEC SQL FETCH homerooms
 INTO :price, :homeroom :date, write(Inquiry, :homeroom, :class) 
Endwhile;
 Endloop:
 Exec SQL CLOSE homerooms;

Task Number: 2
Task Name: Enter parent Information for enrollment

read(info,:bankprovider,:guardianssid,:guardianphone#,:guardianemailaddress,:medicalprovider); 
exec sql whenever sqlerror goto quit;
exec sql Select Student;
Insert-Parent(:bankprovider,:guardianssid,:guardianphone#,:guardianemailaddress,:medicalprovider); 
EXEC SQL INSERT INTO Student VALUES( new(StPar#):bankprovider,:guardianssid,:guardianphone#,:guardianemailaddress,:medicalprovider); 
return StPar#;


Task Number: 3 
Task Name: Make reservation for student enrollment
read(student_id); 
exec sql whenever sqlerror goto quit; 
exec sql 
 from homeroom where studentid = :studentid;
 if not found then write(reservation, “reservation for student enrollment not available”) 
else { if studentbalance !=0 then
 write(reservation, “Student balance must be zero to finalize enrollment reservation”) 
else { read(reservation, studentbalance); 


Task Number: 4
Task Name: process student check-in(insert student)

read(info,:First,:Last,:emailaddress,:gradelevel,:studentid,:allergies,:emergencycontact#,
:emailadress,:password); 
exec sql whenever sqlerror goto quit;
exec sql Select Student;
Insert-Student
(:First,:Last,:emailaddress,:gradelevel,:studentid,:allergies,:emergencycontact#,:emailadress,
:password); 
EXEC SQL INSERT INTO Student 
VALUES( new(Stu#),:First,:Last,:email address,:gradelevel,:studentid,:allergies,emergencycontact#,:emailadress,:password); 
return Stu#;

Task Number: 5
Task Name:enter grade_ level for  homerooms A or B in order to display info(only 2 available)

read(info,:teachername,:amntofkids,:gradelevel,:studentid,:homeroom#)
exec sql whenever sqlerror goto quit
exec sql Select homeroom
Insert Stu# into homeroom
Insert-Homeroom#
(:teachername,:amntofkids,:gradelevel,:studentid,:homeroom#,:Stu#);
EXEC SQL INSERT INTO Homeroom#
VALUES( new(HR#),:teachername,:amntofkids,:gradelevel,:studentid,:homeroom#,:Stu#); 
return HR#;


Task Number: 6
Task Name: Return student class itinerary and essentials

read(info,:lunchtime,:recesstime,:schoolstarttime,:schoolendtime,:studentid,:essentials); 
exec sql whenever sqlerror goto quit;
exec sql Select class;
Insert-class(:lunchtime,:recesstime,:schoolstarttime,:schoolendtime,:studentid,:essentials); 
EXEC SQL INSERT INTO class
 VALUES( new(CL#)(:lunchtime,:recesstime,:schoolstarttime,:schoolendtime,:studentid,:essentials);
 return CL#



Implementation:

Testing instructions:

INSERT INTO `homeroom` (`grade_level`, `student_count`, `room_number`, `teacher_name`) VALUES ('12', '3', ‘a’, 'Alfred Watkins'), ('12', ‘2', ‘b’, 'Chung Ng');

INSERT INTO `homeroom` (`grade_level`, `student_count`, `room_number`, `teacher_name`) VALUES ('6', '3', ‘a’, 'Ben Smith'), ('6', ‘2', ‘b’, 'Knedrick Perkins');

INSERT INTO `homeroom` (`grade_level`, `student_count`, `room_number`, `teacher_name`) VALUES ('4', '3', ‘a’, 'Adam Sandler'), ('4', ‘2', ‘b’, 'Bill Gates');



INSERT INTO `class` (`lunch_time`, `recess_time`, `school_end`, `school_start`) VALUES ('11:00:00', '12:00:00', '12:00:00', '7:00:00'), ('12:00:00', '13:00:00', '15:00:00', '08:00:00'), ('13:00:00', '14:00:00', '16:00:00', '09:00:00')

In order to run the first task, once you're connected to the server, you will run the given php file for task one and it will display the related inquiry questions.
Run the php file containing Insert mysql queries. Open the html browser and feel free to populate the database with parent info ! Or refer to the dummy variables to pre populate the database.
Run PHP files containing task 3 with mysql queries. Once you run the code, you must open the html browser and answer the student ID inquiry. Once the prompted tap is submitted, the php code will check to see if that Student Id has a bank provider. If there is a bank provider found, then the html page should display reservation for student enrollment is successful.
Run the php file containing Insert mysql queries. Open the html browser and feel free to populate the database with student info this time! Or refer to the dummy variables to pre-populate the database with student info.
Run the php to populate the homeroom database. Use the mysql insert queries to put in the data. The html table will allow you to input your grade level and store it in the homeroom database.
Run the php code to run my sql queries to insert student id from html browser. And then run select sql statement to return class attributes like school start and end time and recess and lunch time.



