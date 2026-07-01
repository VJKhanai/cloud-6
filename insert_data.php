<?php

$servername="YOUR_RDS_ENDPOINT";
$username="admin";
$password="YOUR_PASSWORD";
$dbname="powercloud";

$table=$_POST["table"];
$name=$_POST["name"];
$email=$_POST["email"];

try{

$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="INSERT INTO $table(name,email) VALUES(?,?)";

$stmt=$conn->prepare($sql);

$stmt->execute([$name,$email]);

echo "Data Inserted Successfully";

}

catch(PDOException $e){

echo $e->getMessage();

}

$conn=null;

?>
