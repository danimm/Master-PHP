<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Spar;

class SparController extends Controller
{
    public function index(){
        $data = Spar::first();

        // return response()->json($data, 200);

        return view('spar.index', ['data' => $data]);
    }
}
