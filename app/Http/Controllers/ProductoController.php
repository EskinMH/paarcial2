<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productosModel;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['productos'] = productosModel::all();
        return view('produ.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('produ.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recepcionar todos los datos
        $produData = request()->except("_token");
        Produ::insert($produData);
        return redirect()->route('produ.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //recuperar los datos
        $produ=Produ::findOrFail($id);
        return view('produ.edit', compact('produ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $produData=request()->except(['_token', '_method']);
        Produ::where('id', '=', $id)->update($produData);
        return redirect('produ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Produ::destroy($id);
        return redirect('produ');
    }
}
