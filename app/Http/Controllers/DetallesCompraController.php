<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesCompra;

class DetallesCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
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
    public function store(Request $request)
    {
        DetallesCompra::agregarDetallesCompra($request);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        DetallesCompra::quitarDetallesCompra($request);
    }

    public function ordenesAsociadas(Request $request)
    {
        $ordenes = DetallesCompra::index($request);
        return view('detallesCompra.adminIndex', compact('ordenes')); 
    }
}
