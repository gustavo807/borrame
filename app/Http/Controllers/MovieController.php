<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class MovieController extends Controller
{
    public function index()
    {
        return 'hola desde index';
    }

    public function create()
    {
        return 'hola desde create';
    }

}
