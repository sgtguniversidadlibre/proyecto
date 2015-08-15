<?php

class Estudiante extends CI_Model {

    private $id;
    private $fotografia;
    private $nombres;
    private $primerApellido;
    private $segundoApellido;
    private $identificacion;
    private $codigo;
    private $email;
    private $celular;
    private $telefono;
    private $direccion;
    private $usuario;
    private $contrasena;
    private $fechaRegistro;

    public function __construct() {
        parent::__construct();
    }

    public function getId() {
        return $this->id;
    }

    public function getFotografia() {
        return $this->fotografia;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getPrimerApellido() {
        return $this->primerApellido;
    }

    public function getSegundoApellido() {
        return $this->segundoApellido;
    }

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFotografia($fotografia) {
        $this->fotografia = $fotografia;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setPrimerApellido($primerApellido) {
        $this->primerApellido = $primerApellido;
    }

    public function setSegundoApellido($segundoApellido) {
        $this->segundoApellido = $segundoApellido;
    }

    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

}
