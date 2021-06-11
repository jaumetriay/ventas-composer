<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Api\ApiVentas; 
class ApiController extends Controller
{
    //
     
    public function api()
    { 
        
        $api = new ApiVentas(); 
        $api->getAll(); 
    }

    public function getRequest(Request $request)
    {
       
        if(!is_null($request->input('date')))
        {
            echo "DATES: <br>"; 
            $api = new ApiVentas(); 
            $api->getDate($request->input('date')); 
        } 

          
        if(!is_null($request->input('nombre') && !is_null($request->input('apellido'))))
        {
            echo "CLIENTS: <br>"; 
            $api = new ApiVentas(); 
            $api->getClient($request->input('nombre'), $request->input('apellido') ); 
        } 



    }
 

}
