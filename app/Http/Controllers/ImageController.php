<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function test()
    {
        // Crea una imagen en blanco de 200x200 píxeles
        $img = Image::canvas(200, 200, '#ff0000');

        // Guarda la imagen en el directorio public/images
        $img->save(public_path('images/test-image.png'));

        return 'Imagen creada exitosamente';
    }
}
