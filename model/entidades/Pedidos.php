<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedidos
 *
 * @author DELL
 */
class Pedidos {
    
    private $descripcionPedido;
    private $nombre;
    private $apellido;
    private $direccionPedido;
    
    function getDescripcionPedido() {
        return $this->descripcionPedido;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDireccionPedido() {
        return $this->direccionPedido;
    }

    function setDescripcionPedido($descripcionPedido) {
        $this->descripcionPedido = $descripcionPedido;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDireccionPedido($direccionPedido) {
        $this->direccionPedido = $direccionPedido;
    }


}
