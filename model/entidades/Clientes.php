<?php


class Clientes {
    private $id;
    private $username;
    private $nombre_us;
    private $apellido_us;
    private $email_us;
    private $direccion_us;
    private $fechanac_us;
    private $password;
    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

            function getUsername() {
        return $this->username;
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

    function getDireccion_us() {
        return $this->direccion_us;
    }

    function getFechanac_us() {
        return $this->fechanac_us;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
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

    function setDireccion_us($direccion_us) {
        $this->direccion_us = $direccion_us;
    }

    function setFechanac_us($fechanac_us) {
        $this->fechanac_us = $fechanac_us;
    }

    function setPassword($password) {
        $this->password = $password;
    }
   
}
