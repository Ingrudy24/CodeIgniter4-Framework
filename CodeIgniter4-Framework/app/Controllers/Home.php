<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Codeigniter',
            'mensaje' => 'Hola mundo! Soy Rudy'
        ];

        return view('homeview', $data);
    }
}
