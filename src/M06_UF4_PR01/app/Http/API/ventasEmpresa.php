<?php
namespace App\Http\API;
include 'DBConn.php';

class VentasEmpresa extends DBConn{

    function getInfo()
    {
        $result = $this->connect()->query('SELECT * FROM clientes');
        return $result; 
    }

    function getByClient($nombre, $apellido)
    {
    
        $result = $this->connect()->query("SELECT * FROM clientes WHERE nombre LIKE '$nombre' AND apellido LIKE '$apellido'");
        return $result; 
    }

    function getByDate($date)
    {
        $result = $this->connect()->query("SELECT * FROM clientes WHERE fecha > '$date'");
        return $result; 
    }
}