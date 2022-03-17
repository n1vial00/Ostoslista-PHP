<?php
require_once "headers.php";
require "functions.php";


try {
    $db = openDB();
    $sql = "INSERT INTO `item`(`description`, `amount`) VALUES ('testi5',22);";
    $db->exec($sql);

} catch (PDOException $pdoex) {
        header("HTTP/1.1 500 Internal Server Error");
        $error = array("error" => $pdoex->getmessage());
        print json_encode($error);
}
