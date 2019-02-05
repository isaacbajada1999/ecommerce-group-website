<?php
    include 'connection.php';
    $bulk = new MongoDB\Driver\BulkWrite;

    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $address = $_POST["address"];
    $addresses = explode (",", $address);

    try {
        $bulk->update(['_id' => new MongoDB\BSON\ObjectId($id)],
        [
        
        'username' => $username, 
        'email' => $email, 
        'pwd' => $pwd,
        'housenumber' => $addresses[0],
        'housename' => $addresses[1],
        'street' => $addresses[2],
        'city' => $addresses[3],
        'country' => $addresses[4],
        'postalcode' => $addresses[5]
        ]);
        $result = $manager->executeBulkWrite($dbname, $bulk);
        header("Location: ../welcome.php");
    }catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered ".$e);
    }
?>