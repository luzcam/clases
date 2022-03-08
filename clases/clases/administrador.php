<?php 
class Administrador {
    private $usuario;
    private $clave;
    private $nombres="Luz Campos";
    private $apellidoPaterno;
    private $apellidoMaterno;

    public function __construct($usuario, $clave, $nombres, $apellidoPaterno, $apellidoMaterno)
    {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->nombres = $nombres;
        $this->apellidoPaterno =$apellidoPaterno;
        $this->apellidoMaterno=$apellidoMaterno;
    }

    public function NombreCompleto(){
        return "{$this->nombres} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }

    public function AgregarEmpleado(){
        echo 'Agregar empleado';
    }

    public function modificarEmpleado(){
        echo 'Modificar empleado';
    }

    public function darDeBajaEmpleado(){

    }
}

?>