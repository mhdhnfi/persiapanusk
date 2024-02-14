<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Buku $buku)
    {
        return view('main.buku', [
            'data' => Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {

        
        $validated = $request->validate([
            'judul'     => 'required|max:30',
            'pengarang' => 'required',
            'penerbit'  => 'required',
            'stock'     => 'required|max:100',
        ]);
        
    
        Buku::create($validated);
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        
        $buku->delete();
        return redirect()->back();
    }
}
