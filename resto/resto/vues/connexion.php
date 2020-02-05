i<?php
try{
$dba = new PDO("mysql:host=localhost;dbname=resto;charset=utf8","root","");	
 } 
 catch (PDOException $e) {
	echo $e->getMessage();
	
 }


?>