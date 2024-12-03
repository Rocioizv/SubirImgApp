<?php

namespace App\Http\Controllers;

use App\Models\SubirImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubirImgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubirImg $subirImg)
    {
        // return view('upload');
    }

    public function showForm()
    {
        return view('upload'); // Asegúrate de tener esta vista
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubirImg $subirImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubirImg $subirImg)
    {
        //
    }

    public function upload(Request $request)
{
    // Validar que sea una imagen válida
    $request->validate([
        'image' => 'required|file|image|mimes:png,jpg,jpeg,gif|max:2048',
    ]);

    $image = $request->file('image');

    // Generar el nombre del archivo
    $timestamp = now()->format('Y_m_d_H_i_s');
    $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
    $extension = $image->getClientOriginalExtension();
    $storedName = "{$timestamp}_{$originalName}.{$extension}";

    // Guardar el archivo en storage/app/private/ejercicio/
    $path = $image->storeAs('private/ejercicio', $storedName);

    // Guardar los detalles en la base de datos (opcional)
    // Image::create([
    //     'original_name' => $image->getClientOriginalName(),
    //     'stored_name' => $storedName,
    //     'path' => $path,
    // ]);

    return back()->with('success', 'Imagen subida correctamente.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubirImg $subirImg)
    {
        //
    }
}
