

<?php 
	session_start();
	include 'connection.php';    
  	$bulk = new MongoDB\Driver\BulkWrite;
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
	$address = $_POST["address"];
	$addresses = explode (",", $address); //array that splits on every comma on the string of $address

	

    $customers = [
        '_id' => new MongoDB\BSON\ObjectId,
        'username' => $username, 
        'email' => $email, 
        'pwd' => $pwd,
        'housenumber' => $addresses[0],
		'housename' => $addresses[1],
		'street' => $addresses[2],
		'city' => $addresses[3],
		'country' => $addresses[4],
		'postalcode' => $addresses[5]
    

     ];

   

    try{
        $bulk->insert($customers);
        $result = $manager->executeBulkWrite($dbname, $bulk);
        header("Location: ../welcome2.php?flag=$username");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }


?>
