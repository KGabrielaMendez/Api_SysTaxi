<?php
class Usuarios {
	private $ID_US;
	private $CEDULA_US;
	private $NOMBRE_US;
	private $APELLIDO_US;
	private $FECHANAC_US;
	private $CIUDAD_US;
	private $TELEFONO_US;
	private $GENERO_US;
	private $DIRECCION_US;
	private $FECHAREGISTRO_US;
	private $EMAIL_US;

	public function getID_US()
	{
	    return $this->ID_US;
	}
	
	public function getCEDULA_US()
	{
	    return $this->CEDULA_US;
	}
	
	public function setCEDULA_US($CEDULA_US)
	{
	    $this->CEDULA_US = $CEDULA_US;
	    return $this;
	}

	public function getNOMBRE_US()
	{
	    return $this->NOMBRE_US;
	}
	
	public function setNOMBRE_US($NOMBRE_US)
	{
	    $this->NOMBRE_US = $NOMBRE_US;
	    return $this;
	}
	public function getAPELLIDO_US()
	{
	    return $this->APELLIDO_US;
	}
	
	public function setAPELLIDO_US($APELLIDO_US)
	{
	    $this->APELLIDO_US = $APELLIDO_US;
	    return $this;
	}
	public function getFECHANAC_US()
	{
	    return $this->FECHANAC_US;
	}
	
	public function setFECHANAC_US($FECHANAC_US)
	{
	    $this->FECHANAC_US = $FECHANAC_US;
	    return $this;
	}

	public function getCIUDAD_US()
	{
	    return $this->CIUDAD_US;
	}
	
	public function setCIUDAD_US($CIUDAD_US)
	{
	    $this->CIUDAD_US = $CIUDAD_US;
	    return $this;
	}
	public function getTELEFONO_US()
	{
	    return $this->TELEFONO_US;
	}
	
	public function setTELEFONO_US($TELEFONO_US)
	{
	    $this->TELEFONO_US = $TELEFONO_US;
	    return $this;
	}
	public function getGENERO_US()
	{
	    return $this->GENERO_US;
	}
	
	public function setGENERO_US($GENERO_US)
	{
	    $this->GENERO_US = $GENERO_US;
	    return $this;
	}
	public function getDIRECCION_US()
	{
	    return $this->DIRECCION_US;
	}
	
	public function setDIRECCION_US($DIRECCION_US)
	{
	    $this->DIRECCION_US = $DIRECCION_US;
	    return $this;
	}
public function getFECHAREGISTRO_US()
{
    return $this->FECHAREGISTRO_US;
}

public function setFECHAREGISTRO_US($FECHAREGISTRO_US)
{
    $this->FECHAREGISTRO_US = $FECHAREGISTRO_US;
    return $this;
}
public function getEMAIL_US()
{
    return $this->EMAIL_US;
}

public function setEMAIL_US($EMAIL_US)
{
    $this->EMAIL_US = $EMAIL_US;
    return $this;
}

}

?>