<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');
        //id unicode la image
        $nombreImagen = Str::uuid() . "." . $imagen->extension();
        //guarda la imagen
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(1000,1000);
        //guarda imagen en carpeta uploads public
        $imagenPath = public_path('uploads').'/'. $nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
