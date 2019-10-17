<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('frontend.service.index', [
            'title' => 'Data Penulis'
        ]);
    }

    public function create()
    {
        return view('frontend.service.create', [
            'title' => 'Tambah Data Penulis'
        ]);
    }
}
