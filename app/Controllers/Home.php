<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $titulo = ['titulo' => '¡Tu mate te esta esperando! 🧉',
                    't_head' => 'Bienvenidos a Serafina'];
        return view('front/layouts/index_contenido', $titulo);
    }

    public function login()
    {
        $titulo = ['titulo' => 'Ingresa a Serafina',
                    't_head' => 'Inicio de Sesion'];
        return view('front/layouts/login_contenido', $titulo);
    }

    public function quienes_somos(){
        $titulo = ['titulo' => 'Serafina quienes somos',
                    't_head' => 'Quienes somos?'];
        return view('front/layouts/quienes_somos_contenido', $titulo);
    }

    public function acerca_de(){
        $titulo = ['titulo' => 'Acerca de Serafina',
                    't_head' => 'Acerca de Serafina'];
        return view('front/layouts/acerca_de_contenido', $titulo);
    }

    public function registrate(){
        $titulo = ['titulo' => 'Registrate en Serafina',
                    't_head' => 'Registrate en Serafina'];
        return view("front/layouts/registro_contenido",$titulo);
    }
}
