<?php

namespace App\Controllers;

class prueba extends BaseController
{

    public function index(): string
    {
        //echo "HOLA";

        $datos["nombre"] = " ABC SANDRO LASSO";
        $datos["direccion"] = "ABC IBARRA";

        return view('prueba/index' ,$datos);
        
    }

 
}
