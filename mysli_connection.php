<?php
//oop method

$mysqli = new mysqli("localhost","root","","course_management");//here $mysqli is connection string first a ata banaiya nite hoy.


//connection error handle
if($mysqli->connect_errno)
{
	echo "Failed to connect server:(".$mysqli->connect_errno.")".$mysqli->connect_error;
}
else 
{
    echo "Database connection successful!";
}
echo "<br>";

//query check
$sql = "SELECT * FROM students";
if(!$result = $mysqli->query($sql))
{
	echo "Error Occured";
}
else
{
	echo "successful Executted!"."we have:".$result->num_rows." "."rows in this table";//num_rows row count kora

}



?>