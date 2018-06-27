<?php
class login{
private $ID_LOG; 
private $ID_ROL; 
private $USERNAME;
private $PASSWORD;

function __construct($ID_ROL,$USERNAME,$PASSWORD)
{
    $this->ID_ROL = $ID_ROL;
    $this->USERNAME = $USERNAME;
    $this->PASSWORD = $PASSWORD;
}

public function getID_LOG()
{
    return $this->ID_LOG;
}

public function setID_LOG($ID_LOG)
{
    $this->ID_LOG = $ID_LOG;
    return $this;
}

public function getID_ROL()
{
    return $this->ID_ROL;
}

public function setID_ROL($ID_ROL)
{
    $this->ID_ROL = $ID_ROL;
    return $this;
}

public function getUSERNAME()
{
    return $this->USERNAME;
}

public function setUSERNAME($USERNAME)
{
    $this->USERNAME = $USERNAME;
    return $this;
}

public function getPASSWORD()
{
    return $this->PASSWORD;
}

public function setPASSWORD($PASSWORD)
{
    $this->PASSWORD = $PASSWORD;
    return $this;
}
}

?>