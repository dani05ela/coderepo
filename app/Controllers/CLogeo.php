<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CLogeo extends BaseController
{
    public function index()
    {
         // //echo para atar las tres vistas individuales
        echo view ('VistaContenido/header');
        echo view ('VistaContenido/body');
        echo view ('VistaContenido/footer');
        //tres vistas en una sola
        // $cokkie = view ('VistaContenido/header').view ('VistaContenido/body').view ('VistaContenido/footer');
        // return $cokkie;


    }
    public function sum()
    {
         // //echo para atar las tres vistas individuales
        print_r ($_POST);
        //tres vistas en una sola
        // $cokkie = view ('VistaContenido/header').view ('VistaContenido/body').view ('VistaContenido/footer');
        // return $cokkie;


    }
    
}
