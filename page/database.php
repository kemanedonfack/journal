<?php 

try 
{
	$database = new PDO('mysql:host=localhost;dbname=club_journal;charset=utf8','root','');
	$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}
 catch (PDOException $e) 
{
	die($e->getMessage());
}


 ?>