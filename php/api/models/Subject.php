<?php

/**
 * Description of Subject
 *
 * @author Admin
 */
class Subject {

    private $id;
    private $hungarian;
    private $ukrainian;
    private $src_audio;
    private $src_img;

    function getId() {
        return $this->id;
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
