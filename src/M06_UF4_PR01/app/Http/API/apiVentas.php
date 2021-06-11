<?php
namespace App\Http\API;
include 'ventasEmpresa.php';

use \PDO; 
class ApiVentas{

    

    function getClient($nombre, $apellido){
        $venta = new VentasEmpresa(); 
        $ventas = array();
        $ventas['register'] = array(); 

        $result = $venta->getByClient($nombre, $apellido); 

        if($result->rowCount())
        {
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                $register = array(
                    'apellido' => $row['apellido'],
                    'cantidad' => $row['cantidad'],
                    'fecha' => $row['fecha'],
                    'nacimiento' => $row['nacimiento'],
                    'nombre' => $row['nombre'],
                    'tel' => $row['tel'],
                );
                array_push($ventas['register'], $register);
            }

            http_response_code(200);
            echo json_encode($ventas);
        }
        else
        {
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }

    function getDate($date)
    {
        
        $venta = new VentasEmpresa(); 
        $ventas = array();
        $ventas['register'] = array(); 

        $result = $venta->getByDate($date); 

        if($result->rowCount())
        {
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                $register = array(
                    'apellido' => $row['apellido'],
                    'cantidad' => $row['cantidad'],
                    'fecha' => $row['fecha'],
                    'nacimiento' => $row['nacimiento'],
                    'nombre' => $row['nombre'],
                    'tel' => $row['tel'],
                );
                array_push($ventas['register'], $register);
            }

            http_response_code(200);
            echo json_encode($ventas);
        }
        else
        {
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    
    }

    function getAll(){
        $venta = new VentasEmpresa(); 
        $ventas = array();
        $ventas['register'] = array(); 

        $result = $venta->getInfo(); 

        if($result->rowCount())
        {
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                $register = array(
                    'apellido' => $row['apellido'],
                    'cantidad' => $row['cantidad'],
                    'fecha' => $row['fecha'],
                    'nacimiento' => $row['nacimiento'],
                    'nombre' => $row['nombre'],
                    'tel' => $row['tel'],
                );
                array_push($ventas['register'], $register);
            }

            http_response_code(200);
            echo json_encode($ventas);
        }
        else
        {
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }
}
// function callApi()
// { 
//     $api = new ApiVentas(); 
//     $api->getAll(); 
// }