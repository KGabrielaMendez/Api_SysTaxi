<?php


class Conductores {
    private $id;
    private $nombre_us;
    private $apellido_us;
    private $email_us;
    private $numero_uni;
    private $nombre_coop;
    private $fechanac_us;
    private $telefono_us; 
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

        
    function getNombre_us() {
        return $this->nombre_us;
    }

    function getApellido_us() {
        return $this->apellido_us;
    }

    function getEmail_us() {
        return $this->email_us;
    }

    function getNumero_uni() {
        return $this->numero_uni;
    }

    function getNombre_coop() {
        return $this->nombre_coop;
    }

    function getFechanac_us() {
        return $this->fechanac_us;
    }

    function getTelefono_us() {
        return $this->telefono_us;
    }

    function setNombre_us($nombre_us) {
        $this->nombre_us = $nombre_us;
    }

    function setApellido_us($apellido_us) {
        $this->apellido_us = $apellido_us;
    }

    function setEmail_us($email_us) {
        $this->email_us = $email_us;
    }

    function setNumero_uni($numero_uni) {
        $this->numero_uni = $numero_uni;
    }

    function setNombre_coop($nombre_coop) {
        $this->nombre_coop = $nombre_coop;
    }

    function setFechanac_us($fechanac_us) {
        $this->fechanac_us = $fechanac_us;
    }

    function setTelefono_us($telefono_us) {
        $this->telefono_us = $telefono_us;
    }

}
