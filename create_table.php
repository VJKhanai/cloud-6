<?php

$servername = "YOUR_RDS_ENDPOINT";
$username = "admin";
$password = "YOUR_PASSWORD";
$dbname = "powercloud";

$tableName = $_GET['name'];

try{

$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="CREATE TABLE IF NOT EXISTS $tableName(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(100)
)";

$conn->exec($sql);

echo "Table Created Successfully";

}
catch(PDOException $e){

echo $e->getMessage();

}

$conn=null;

?>
