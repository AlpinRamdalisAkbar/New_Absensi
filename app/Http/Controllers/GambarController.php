<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambars = Gambar::latest()->paginate(10);
  
        return view('absents.index',compact('gambars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit(Gambar $gambar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambar $gambar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambar $gambar)
    {
        $gambar->delete();
       
        return redirect()->route('gambars.index')
                         ->with('success','berhasil menghapus !');
    }
}
