<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Word
 *
 * @author Admin
 */
class Word {

    private $id;
    private $subject_id;
    private $hungarian;
    private $ukrainian;
    private $src_audio;
    private $src_img;

    function getId() {
        return $this->id;
    }

    function getSubject_id() {
        return $this->subject_id;
    }

    function getHungarian() {
        return $this->hungarian;
    }

    function getUkrainian() {
        return $this->ukrainian;
    }

    function getSrc_audio() {
        return $this->src_audio;
    }

    function getSrc_img() {
        return $this->src_img;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSubject_id($subject_id) {
        $this->subject_id = $subject_id;
    }

    function setHungarian($hungarian) {
        $this->hungarian = $hungarian;
    }

    function setUkrainian($ukrainian) {
        $this->ukrainian = $ukrainian;
    }

    function setSrc_audio($src_audio) {
       $this->src_audio = "audios/".$src_audio;
    }

    function setSrc_img($src_img) {
        $this->src_img = "images/".$src_img;
    }

}
