<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Spar;

class SparController extends Controller
{
    public function index(){
        $data = Spar::all();

        // return response()->json($data, 200);
        return view('spar.index', ['data' => $data]);
    }

    public function create(){
        return view('spar.create');
    }

    public function store(Request $request){
        // Validación

        $validate = $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'postcode' => ['required', 'integer'],
            'place' => ['required', 'string']
        ]);

        // Recoger los datos
        $name= $request->input('name');
        $address= $request->input('address');
        $postcode= $request->input('postcode');
        $place= $request->input('place');

        // Asignar valores al nuevo objeto
        $spar = new Spar();
        $spar->name = $name;
        $spar->address = $address;
        $spar->postcode = $postcode;
        $spar->place = $place;

        // guardar
        $spar->save();

        // Redirección
        return redirect()->route('shops')->with(['message' => 'Tienda añadida correctamente']);
    }

    public function edit($id){
        $spar = Spar::find($id);
        return view('spar.edit', ['spar' => $spar]);
    }

    public function update(Request $request, $id) {
        // Validación del formulario
        $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'postcode' => ['required', 'integer'],
            'place' => ['required', 'string']
        ]);

        // Recoger los datos de la request
        $name = $request->input('name');
        $address = $request->input('address');
        $postcode = $request->input('postcode');
        $place = $request->input('place');

        // Asignar los nuevos valores
        $spar = Spar::find($id);
        $spar->name = $name;
        $spar->address = $address;
        $spar->postcode = $postcode;
        $spar->place = $place;

        // actualizar
        $spar->update();

        // Redirección

        return redirect()->route('shops')->with(['message' => 'Tienda actualizada correctamente']);
    }

    public function delete($id){
        $spar = Spar::find($id);
        $spar->delete();

        return redirect()->route('shops')->with(['message' => 'Imagen eliminada correctamente']);
    }


}
