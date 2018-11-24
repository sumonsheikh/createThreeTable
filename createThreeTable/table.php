<?php
include('config.php');
$std_profile="CREATE TABLE  student_profile(
sid INT(10) NOT NULL,
fname VARCHAR(11) NOT NULL,
lname VARCHAR(11) NOT NULL,
email VARCHAR(30) NOT NULL,
age INT(10) NOT NULL,
address VARCHAR(100) NOT NULL,
phone VARCHAR(20) NOT NULL,
PRIMARY KEY(sid))";
$result=mysqli_query($myconn,$std_profile);
if($result===TRUE)
{
	echo"student info table created  ";
}
else
{
		echo"student info table not created  ";

}

$std_depatment="CREATE TABLE student_department(
did INT(10) NOT NULL,
sid INT(10) NOT NULL,
name VARCHAR(30) NOT NULL,
building INT(11) NOT NULL,
email VARCHAR(30) NOT NULL,
phone VARCHAR(20) NOT NULL,
PRIMARY KEY(did))";
$result=mysqli_query($myconn,$std_depatment);
if($result===TRUE)
{
	echo"student department info table created  ";
}
else
{
		echo"student department info table not created ";

}
$std_course="CREATE TABLE student_course(
cid INT(10) NOT NULL,
sid INT(10) NOT NULL,
courseTitle VARCHAR(30) NOT NULL,
courseCode VARCHAR(11) NOT NULL,
credit VARCHAR(30) NOT NULL,
PRIMARY KEY(cid))";
$result=mysqli_query($myconn,$std_course);
if($result===TRUE)
{
	echo"student course info table created  ";
}
else
{
		echo"student course info table not created ";

}

?>
