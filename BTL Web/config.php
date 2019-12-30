<?php
$hostname='localhost';
$username='id12091748_root';
$password='ducbg269';


try{
	$db=new PDO("mysql:host=$hostname;dbname=id12091748_project",$username,$password);
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	echo "Connection error: ".$e->getMessage();
)
?>