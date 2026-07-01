<?php

$servername="YOUR_RDS_ENDPOINT";
$username="admin";
$password="YOUR_PASSWORD";
$dbname="powercloud";

$table=$_GET["table"];

try{

$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$stmt=$conn->query("SELECT * FROM $table");

$data=$stmt->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");

echo json_encode($data);

}

catch(PDOException $e){

echo $e->getMessage();

}

$conn=null;

?>
