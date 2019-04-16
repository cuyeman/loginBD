<?php

class Ley{
    private $idley;
    private $numley;
    private $fecpublicacion;
    private $fecpromulgacion;
    private $titulo;
    private $fechahora;
    
    function __construct($idley, $numley, $fecpublicacion, $fecpromulgacion, $titulo, $fechahora) {
        $this->idley = $idley;
        $this->numley = $numley;
        $this->fecpublicacion = $fecpublicacion;
        $this->fecpromulgacion = $fecpromulgacion;
        $this->titulo = $titulo;
        $this->fechahora = $fechahora;
    }
    
    function getIdley() {
        return $this->idley;
    }

    function getNumley() {
        return $this->numley;
    }

    function getFecpublicacion() {
        return $this->fecpublicacion;
    }

    function getFecpromulgacion() {
        return $this->fecpromulgacion;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getFechahora() {
        return $this->fechahora;
    }

    function setIdley($idley) {
        $this->idley = $idley;
    }

    function setNumley($numley) {
        $this->numley = $numley;
    }

    function setFecpublicacion($fecpublicacion) {
        $this->fecpublicacion = $fecpublicacion;
    }

    function setFecpromulgacion($fecpromulgacion) {
        $this->fecpromulgacion = $fecpromulgacion;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setFechahora($fechahora) {
        $this->fechahora = $fechahora;
    }
    
}

