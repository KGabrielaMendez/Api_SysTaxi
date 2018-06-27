<?php
class rol{
private $ID_ROL; 
private $DESCRIPCION;

public function getID_ROL()
{
    return $this->ID_ROL;
}

public function setID_ROL($ID_ROL)
{
    $this->ID_ROL = $ID_ROL;
    return $this;
}
public function getDESCRIPCION()
{
    return $this->DESCRIPCION;
}

public function setDESCRIPCION($DESCRIPCION)
{
    $this->DESCRIPCION = $DESCRIPCION;
    return $this;
}
}