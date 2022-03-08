<?php 
class Cliente{
	private $usuario;
    private $clave;
    private $nombres;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaNacimiento;
    private $genero;
    private $email;
    private $telefono1;
    private $telefono2;

    public function __construct($usuario, $clave, $nombres, $apellidosPaterno, $apellidoMaterno, $fechaNacimiento, $genero, $email, $telefono1,$telefono2){
    	$this->usuario=$usuario;
    	$this->clave=$clave;
    	$this->nombres=$nombres;
    }
}
?>