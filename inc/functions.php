<?php

function openDB() {
    $db = new PDO("mysql: host=localhost;dbname=shoppinglist;charset=utf8","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}
