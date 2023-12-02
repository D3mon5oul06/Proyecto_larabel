<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    // Método para cargar la vista de la página de inicio
    public function index()
    {
        return view('landing.home');
    }

    // Método para cargar la vista de la página de comics
    public function comic()
    {
        return view('landing.comic');
    }

    // Método para cargar la vista de la página de personajes
    public function personajes()
    {
        return view('landing.personajes');
    }

    // Método para cargar la vista de la página "Acerca de"
    public function acerca()
    {
        return view('landing.acerca');
    }

    public function personas()
    {
        return view('landing.personas');
    }

}
