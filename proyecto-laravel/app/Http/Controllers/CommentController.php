<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

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
        $user = \Auth::user();
        $image_id = $request->input('image_id');
        $content = $request->input('content');

        // Asigno los valores a mi nuevo objeto comment
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;

        // Guardar en la base de datos
        $comment->save();

        // Redirección
        return redirect()->route('image.detail', ['id' => $image_id])
            ->with([
                'message' => 'Has publicado tu comentario'
            ]);
    }

    public function delete($id)
    {
        // Conseguir datos del usuario identificado
        $user = \Auth::user();

        // Conseguir objeto del comentario
        $comment = Comment::find($id);

        // Comprobar si soy el dueño del comentario o el dueño de la imagen
        if ($user && ($comment->user_id == $user->id) || $comment->image->user_id == $user->id) {
            $comment->delete();
        } else {
            // Redirección
            return redirect()->route('image.detail', ['id' => $comment->image->id])
            ->with([
                'message' => 'Error al borrar el comentario'
            ]);
         }

        // Redirección
        return redirect()->route('image.detail', ['id' => $comment->image->id])
            ->with([
                'message' => 'Comentario eliminado correctamente'
            ]);
    }
}
