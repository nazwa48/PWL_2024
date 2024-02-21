<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }   

    public function about() {
        return 'Nazwa Ayunda <br>2241720013';
        } 

    public function articles($id) {
        return "Halaman Artikel dengan ID {{$id}}";
        } 
}
