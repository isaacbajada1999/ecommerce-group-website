
<?php
  
   // select a database
 require 'C:\xampp\htdocs\mongo\vendor\autoload.php';
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$dbname = "store.customers";

/*$collection = $client->store->addons;
$collection1 = $client->store->baskets;
$collection2 = $client->store->customers;
$collection3 = $client->store->histories;*/
?>