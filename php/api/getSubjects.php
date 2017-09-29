<?php

require_once 'models/Subject.php';
require_once 'connect.php';
$db = new DB_CONNECT();

$response = array();
$result = mysql_query("SELECT * FROM subject") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $response["success"] = 1;
    $response["subjects"] = 0;
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["subjects"] = array();
    $response["count_all"] = $count;
    while ($row = mysql_fetch_assoc($result)) {
        
        $subject = new Subject();
        $subject->setId($row['id']);
        $subject->setHungarian($row['hu']);
        $subject->setUkrainian($row['ua']);
        $subject->setSrc_audio($row['src_audio']);
        $subject->setSrc_img($row['src_img']);
        
        $arraySubject = array();
        $arraySubject['id'] = $subject->getId();
        $arraySubject['hu'] = $subject->getHungarian();
        $arraySubject['ua'] = $subject->getUkrainian();
        $arraySubject['src_audio'] = $subject->getSrc_audio();
        $arraySubject['src_img'] = $subject->getSrc_img();
        
        array_push($response['subjects'], $arraySubject);
    }
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}