<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 07/09/2017
 * Time: 20:00
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function index($nome)
    {
        return view('test.index', ['nome' =>$nome]);
    }

    public function notas() {
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
        ];

        return view('test.notas', compact('notas'));
    }
}