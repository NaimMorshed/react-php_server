<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');

    $connect = mysqli_connect('localhost', 'root', '', 'shop');

    $query = "SELECT * From products";
    $result = mysqli_query($connect, $query);
    $json_data = array();

    while($row = mysqli_fetch_array($result)) {
        $json_data[] = $row;
    }
    echo json_encode($json_data);

?>
 