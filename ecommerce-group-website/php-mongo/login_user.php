
<?php
include 'connection.php';
session_start();

    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
 

    $filter = [
        'username' => $username,
        'email' => $email,
        'pwd' => $pwd
        
    ];
    $query = new MongoDB\Driver\Query($filter);

    try{
        $result = $manager->executeQuery($dbname, $query);
        $row = $result->toArray();
        $customers = $row[0]->username;
        $_SESSION['username'] = $customers;
        header("Location: ../welcome.php?flag=$username");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }

    try{
		$result = $manager->executeQuery($dbname, $query);
        $row = $result->toArray();
		$customers = $row[0]->email;
    	$_SESSION['email'] = $customers;
}   	catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);


    }

    try{
		$result = $manager->executeQuery($dbname, $query);
        $row = $result->toArray();
		$customers = $row[0]->pwd;
    	$_SESSION['password'] = $customers;
}   	catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);


    }


    try{
        $result = $manager->executeQuery($dbname, $query);
        $row = $result->toArray();
        $_SESSION["errormsg"]='*invalid information';
}       catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);


    }




?>