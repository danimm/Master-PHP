<?php

namespace App\Http\Controllers;

// Require
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// Models
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }

    public function index(){
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function config()
    {
        return view('user.config');
    }

    public function update(Request $request){
        // Conseguir el usuario idenfiticado
        $user = Auth::user();
        $id = $user->id;

        // Validación del formulario
        $validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'initial' => ['required', 'string', 'unique:users,initial,' . $id],
            'phone' => ['integer', 'nullable'],
            'address' => ['alpha_num', 'nullable'],
            'postcode' => ['integer', 'nullable'],
            'place' => ['string', 'nullable'],
            'image' => ['image', 'nullable']
        ]);

        // Recoger los datos del formulario
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $initial = $request->input('initial');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $postcode = $request->input('postcode');
        $place = $request->input('place');

        // Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->email = $email;
        $user->initial = $initial;
        $user->phone = $phone;
        $user->address = $address;
        $user->postcode = $postcode;
        $user->place = $place;


        // Subir la imagen
        $image_path = $request->file('image');
        if($image_path){
            // poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // guardarla en la carpeta storage/app/users
            Storage::disk('users')->put($image_path_name, \File::get($image_path));

            // Eliminar la imagen antigua
            if($user->image){
                Storage::disk('users')->delete($user->image);
            }


            // Setear el nombre de la imagen en el objeto user
            $user->image = $image_path_name;
        }

        // Ejecutar consulta y cambios en la base de datos
        $user->update();

        // Redirect
        return redirect()->route('config')
            ->with(['message' => 'Usuario actualizado correctamente']);
    }
}
