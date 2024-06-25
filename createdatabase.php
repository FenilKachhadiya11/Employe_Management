<?php
require 'vendorfile/autoload.php'; 
$client = new MongoDB\client; 
$newdb=$client->newdb; 
$result1 = $newdb->createCollection('newcollection'); 
var_dump($result1); 
?>