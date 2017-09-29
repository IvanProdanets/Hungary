<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AudioLesson
 *
 * @author Admin
 */
class AudioLesson {

    private $id;
    private $title_Ua;
    private $title_Hu;
    private $text_Ua;
    private $text_Hu;
    private $src_audio;
    private $src_image;

    function getId() {
        return $this->id;
    }

    function getSrc_audio() {
        return $this->src_audio;
    }

    function getSrc_image() {
        return $this->src_image;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSrc_audio($src_audio) {
        $this->src_audio = "http://hungary.pe.hu/audios/audio_lessons/".$src_audio;
    }

    function setSrc_image($src_image) {
        $this->src_image = "http://hungary.pe.hu/images/".$src_image;
    }
    function getTitle_Ua() {
        return $this->title_Ua;
    }

    function getTitle_Hu() {
        return $this->title_Hu;
    }

    function getText_Ua() {
        return $this->text_Ua;
    }

    function getText_Hu() {
        return $this->text_Hu;
    }

    function setTitle_Ua($title_Ua) {
        $this->title_Ua = $title_Ua;
    }

    function setTitle_Hu($title_Hu) {
        $this->title_Hu = $title_Hu;
    }

    function setText_Ua($text_Ua) {
        $this->text_Ua = $text_Ua;
    }

    function setText_Hu($text_Hu) {
        $this->text_Hu = $text_Hu;
    }


}
