<?php
    $id = $_GET["id"];

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');

    $connect = mysqli_connect('localhost', 'root', '', 'shop');

    $query = "DELETE FROM products WHERE ID=$id";
    
    if (mysqli_query($connect, $query)) {
        echo json_encode('deleted');
    } else {
        echo json_encode('error');
    }

?>