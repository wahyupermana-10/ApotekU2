<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Obat;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = Kategori::all();

        return view('kategori.index', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Kategori();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('kategori.index')->with('status', 'Kategori sukses ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        $data = $kategori;
        return view('kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $kategori->name = $request->name;
        $kategori->description = $request->description;
        $kategori->save();
        return redirect()->route('kategori.index')->with('status', 'Kategori sukses diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        // $this->authorize('delete-medicine', $kategori);
        try{
            $kategori->delete();
            return redirect()->route('kategori.index')->with('status', 'category sukses dihapus!');
        }catch(\Exception $e){
            return redirect()->route('kategori.index')->with('error', 'category gagal dihapus!');
        }
    }
}
