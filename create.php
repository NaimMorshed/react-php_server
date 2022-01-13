<?php
    $title = $_GET["title"];
    $qty = $_GET["qty"];
    $price = $_GET["price"];

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');

    $connect = mysqli_connect('localhost', 'root', '', 'shop');

    $query = "INSERT INTO products VALUES (NULL, $title, $qty, $price)";
    
    if (mysqli_query($connect, $query)) {
        echo json_encode('success');
    } else {
        echo json_encode('error');
    }

?>