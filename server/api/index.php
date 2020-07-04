<?php


    require_once('functions.php');

    header("Content-Type: application/json; charset=UTF-8");


    require_once('db_connection.php');
    set_exception_handler('error_handler');

    // $query = "SELECT * FROM dvd_collection";
    $query = "SELECT * FROM mydb.dvd_collection;";


    $queryResult = mysqli_query($conn, $query);

    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    exit(json_encode($result));
?>
