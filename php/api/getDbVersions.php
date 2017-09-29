<?php

require_once 'connect.php';
$db = new DB_CONNECT();

$response = array();

    $query_search = "SELECT `table_name`, `table_version` FROM `table_version`";
    $result = mysql_query($query_search) or die(mysql_error());
    
    while ($row = mysql_fetch_assoc($result)) {
        $arrayT = array();
        $arrayT['table_name'] = $row['table_name'];
        $arrayT['table_version'] = $row['table_version'];
        array_push($response, $arrayT);
    }
        echo json_encode($response);

