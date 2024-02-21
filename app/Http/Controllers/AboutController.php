<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $nim = '2241720013';
        $nama = 'Nazwa Ayunda Mirrohillah';

        return "NIM: $nim<br>Nama: $nama";
    }
}