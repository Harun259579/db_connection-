<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=course_management','root','');

}
catch(PDOException $e)
{
	echo "Error Estblishing dtbase connection:".$e->getMessage()."<br>";
}


//query check
$stment =$pdo->prepare("SELECT * FROM students");
$stment->execute();
echo "successful Executted!"."we have:".$stment->rowCount()." "."rows in this table";

?>