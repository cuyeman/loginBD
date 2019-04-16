<?php

class Usuario {
    private $idusuario;
    private $nombre;
    private $nomusu;
    private $clave;
    private $pref01;
    private $pref02;
    private $pref03;
    
    function __construct($idusuario, $nombre, $nomusu, $clave, $pref01, $pref02, $pref03) {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->nomusu = $nomusu;
        $this->clave = $clave;
        $this->pref01 = $pref01;
        $this->pref02 = $pref02;
        $this->pref03 = $pref03;
    }
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getNomusu() {
        return $this->nomusu;
    }

    function getClave() {
        return $this->clave;
    }

    function getPref01() {
        return $this->pref01;
    }

    function getPref02() {
        return $this->pref02;
    }

    function getPref03() {
        return $this->pref03;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNomusu($nomusu) {
        $this->nomusu = $nomusu;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setPref01($pref01) {
        $this->pref01 = $pref01;
    }

    function setPref02($pref02) {
        $this->pref02 = $pref02;
    }

    function setPref03($pref03) {
        $this->pref03 = $pref03;
    }
}
    