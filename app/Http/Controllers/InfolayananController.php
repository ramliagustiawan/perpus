<?php

namespace App\Http\Controllers;

use App\Infolayanan;
use Illuminate\Http\Request;

class InfolayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.infolayanan.index', [
            'title' => 'Data Penulis'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.infolayanan.create', [
            'title' => 'Tambah Data Penulis'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Infolayanan  $infolayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Infolayanan $infolayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infolayanan  $infolayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Infolayanan $infolayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infolayanan  $infolayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infolayanan $infolayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infolayanan  $infolayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infolayanan $infolayanan)
    {
        //
    }
}
