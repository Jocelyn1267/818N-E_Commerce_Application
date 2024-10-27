<?php 

// Write connection (primary endpoint)
$con = new mysqli('multiaz-db.cluster-crcma846ks5o.us-east-1.rds.amazonaws.com', 'admin', '12345678', 'ecommerce_1');
if ($con->connect_error) {
    die("Write Connection failed: " . $con->connect_error);
}

// Read connection (read-only endpoint)
$readCon = new mysqli('multiaz-db.cluster-ro-crcma846ks5o.us-east-1.rds.amazonaws.com', 'admin', '12345678', 'ecommerce_1');
if ($readCon->connect_error) {
    die("Read Connection failed: " . $readCon->connect_error);
}

echo "Connections to both write and read endpoints were successful.";

?>

