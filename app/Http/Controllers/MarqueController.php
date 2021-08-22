<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    public function index()
    {
    
        $marques = Marque::all() ->sortBy('nom');
       
        return view("marque", compact('marques'));
    }
}
