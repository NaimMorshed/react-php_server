<?php
    $id = $_GET["id"];
    $title = $_GET["title"];
    $qty = $_GET["qty"];
    $price = $_GET["price"];

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');

    $connect = mysqli_connect('localhost', 'root', '', 'shop');

    $query = "UPDATE products SET TITLE=$title, QTY=$qty, PRICE=$price WHERE ID=$id";
    
    if (mysqli_query($connect, $query)) {
        echo json_encode('updated');
    } else {
        echo json_encode('error');
    }

?>