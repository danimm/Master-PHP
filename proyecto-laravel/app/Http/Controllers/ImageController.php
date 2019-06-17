<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Image;
use App\Comment;
use App\Like;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('image.create');
    }

    public function save(Request $request)
    {
        // Validación
        $validate = $request->validate([
            'description' => 'required',
            'image_path' => ['required', 'image']
        ]);

        // Recoger los datos de la request
        $image_path = $request->file('image_path');
        $description = $request->input('description');


        // Asignar valores al nuevo objeto
        $user = \Auth::user();
        $image = new Image();
        $image->user_id = $user->id;
        $image->description = $description;

        // Subir fichero
        if ($image_path) {
            $image_path_name = time() . $image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path = $image_path_name;
        }

        $image->save();

        return redirect()->route('home')->with(['message' => 'La foto se subió correctamente']);
    }

    public function getImage($filename)
    {
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    public function detail($id)
    {
        $image = Image::find($id);
        return view('image.detail', [
            'image' => $image
        ]);
    }

    public function delete($id){
        $user = Auth::user();
        $image = Image::find($id);
        $comments = Comment::where('image_id', $id)->get();
        $likes = Like::where('image_id', $id)->get();

        if ($user && $image && $image->user_id == $user->id) {
            //Eliminar Comentarios
            if ($comments && count($comments) >= 1) {
                foreach ($comments as $comment) {
                    $comment->delete();
                }
            }

            //Eliminar likes
            if ($likes && count($likes) >= 1) {
                foreach ($likes as $like) {
                    $like->delete();
                }
            }

            //Eliminar ficheros de imagen
            Storage::disk('images')->delete($image->image_path);

            //Eliminar registro de la imagen
            $image->delete();


            // Enviar un mensaje
            $message = ['message' => 'Imagen borrada correctamente'];

        } else {
            $message = ['message' => 'Error al borrar la imagen..'];
        } 
        // Redirección
        return redirect()->route('home')->with($message);
    }
}
