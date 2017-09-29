<?php

require_once 'models/AudioLesson.php';
require_once 'connect.php';
$db = new DB_CONNECT();

$response = array();
$result = mysql_query("SELECT * FROM audio_lesson") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $response["success"] = 1;
    $response["audio_lessons"] = 0;
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["audio_lessons"] = array();
    $response["count_all"] = $count;
    while ($row = mysql_fetch_assoc($result)) {
        
        $audioLesson = new AudioLesson();
        $audioLesson->setId($row['id']);
        $audioLesson->setTitle_Ua($row['title_ua']);
        $audioLesson->setTitle_Hu($row['title_hu']);
        $audioLesson->setText_Hu($row['text_hu']);
        $audioLesson->setText_Ua($row['text_ua']);
        $audioLesson->setSrc_audio($row['src_audio']);
        $audioLesson->setSrc_image($row['src_image']);
        
        $arrayAudioLesson = array();
        $arrayAudioLesson['id'] = $audioLesson->getId();
        $arrayAudioLesson['title_ua'] = $audioLesson->getTitle_Ua();
        $arrayAudioLesson['title_hu'] = $audioLesson->getTitle_Hu();
        $arrayAudioLesson['text_ua'] = $audioLesson->getText_Ua();
        $arrayAudioLesson['text_hu'] = $audioLesson->getText_Hu();
        $arrayAudioLesson['src_audio'] = $audioLesson->getSrc_audio();
        $arrayAudioLesson['src_image'] = $audioLesson->getSrc_image();
        
        array_push($response['audio_lessons'], $arrayAudioLesson);
    }
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}