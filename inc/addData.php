<?php
require "headers.php";
require "functions.php";


try {
    $db = openDB();
    
    $query = $db->prepare('INSERT INTO item(description, amount) VALUES (:description, :amount)');
    $query->bindValue(':description',$description,PDO::PARAM_STR);
    $query->bindValue(':amount',$amount,PDO::PARAM_INT);

    $query->execute();
    header('HTTP/1.1. 200 OK');
    $data = array('id' => $db->lastInsertId(),'description' = $description);
    print json_encode($data);

} catch (PDOException $pdoex) {
    header("HTTP/1.1 500 Internal Server Error");
    $error = array("error" => $pdoex->getmessage());
    print json_encode($error);
}
