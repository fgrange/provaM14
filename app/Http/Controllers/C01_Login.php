<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C01_Login extends Controller
{
    //
    public function login()
    { //print_r($_POST);
        var_dump($_POST);
        $usr = $_POST["usuari"];
        $psw = $_POST["contrasenya"];
        
        if (($usr=="fede")&&($psw=="fede")) { echo "si";}
        else {echo "no";}
      }
}
