<?php

require_once 'models/Word.php';
require_once 'connect.php';
$db = new DB_CONNECT();

if ($_GET['id']) {
    $response = array();
    $result = mysql_query("SELECT * FROM word WHERE subject_id = ".$_GET['id']) or die(mysql_error());
    $count = mysql_num_rows($result);
    if ($count == 0) {
        $response["success"] = 1;
        $response["words"] = 0;
        echo json_encode($response);
    } else {
        $response["success"] = 1;
        $response["words"] = array();
        $response["count_all"] = $count;
        while ($row = mysql_fetch_assoc($result)) {

            $words = new Word();
            $words->setId($row['id']);
            $words->setHungarian($row['hu']);
            $words->setUkrainian($row['ua']);
            $words->setSrc_audio($row['src_audio']);
            $words->setSrc_img($row['src_img']);

            $arrayWords = array();
            $arrayWords['id'] = $words->getId();
            $arrayWords['hu'] = $words->getHungarian();
            $arrayWords['ua'] = $words->getUkrainian();
            $arrayWords['src_audio'] = $words->getSrc_audio();
            $arrayWords['src_img'] = $words->getSrc_img();

            array_push($response['words'], $arrayWords);
        }
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
}