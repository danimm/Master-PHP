<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {
        // Validación
        $validate = $this->validate($request, [
            'image_id' => ['required', 'integer'],
            'content' => ['required', 'string'],
        ]);

        // Recoger los datos
        $image_id = $request->input('image_id');
        $content = $request->input('content');
    }
}
