<?php
class Cliente {
    private $dni;
    private $nombre;
    private $direccion;
    private $localidad;
    private $provincia;
    private $telefono;
    private $email;

    // public function __construct(){}

    public function getDni()                    {return $this->dni;}
    public function getNombre()                 {return $this->nombre;}
    public function getDireccion()              {return $this->direccion;}
    public function getLocalidad()              {return $this->localidad;}
    public function getProvincia()              {return $this->provincia;}
    public function getTelefono()               {return $this->telefono;}
    public function getEmail()                  {return $this->email;}

    public function setDni($dni)                {$this->dni=$dni;}
    public function setNombre($nombre)          {$this->nombre = $nombre;}
    public function setDireccion($direccion)    {$this->direccion = $direccion;}
    public function setLocalidad($localidad)    {$this->localidad=$localidad;}
    public function setProvincia($provincia)    {$this->provincia=$provincia;}
    public function setTelefono($telefono)      {$this->telefono=$telefono;}
    public function setEmail($email)            {$this->email=$email;}

    public function __toString(){
        $info = "<tr>";
        $info .= "<td>{$this->dni}</td>";
        $info .= "<td>{$this->nombre}</td>";
        $info .= "<td>{$this->direccion}</td>";
        $info .= "<td>{$this->localidad}</td>";
        $info .= "<td>{$this->provincia}</td>";
        $info .= "<td>{$this->telefono}</td>";
        $info .= "<td>{$this->email}</td>";
        $info .= "<td><a href='editarCliente.php?dni={$this->dni}'><button class='editar'>Editar</button></a></td>";
        $info .= "<td><a href='borrarCliente.php?dni={$this->dni}'><button class='borrar'>Borrar</button></a></td>";
        $info .= "</tr>";
        return $info;
    }
}

?>