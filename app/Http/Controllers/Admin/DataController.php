<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class DataController extends Controller
{
    Public function authors()
    {
        return datatables()->of(Author::orderBy('name','ASC'))
                    ->addIndexColumn()
                    ->toJson();
    }
}
