<?php

namespace Cinema\Http\Controllers;

use Cinema\User;
use Cinema\Http\Controllers\Controller;


class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return 'hola desde controller 1';
    }

    public function nombre($nombre = 'Gustavo'){
        return 'Mi nombre es: '.$nombre;
    }
}