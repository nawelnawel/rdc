<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Lot;
use App\Models\Marque;
use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index()
    {
    
        $lots = Lot::all();
       
        return view("lot", compact('lots'));
    }



    public function create()
    {
        $categories = Categorie::all();
        $marques = Marque::all();
        return view("createLot", compact("categories","marques"));
    }


    public function store(Request $request){
        $request->validate([
"num_lot"=>"required",
"num_ao"=>"required",
"num_ap"=>"required",
"qte"=>"required",
"cout"=>"required",
"fournisseur"=>"required",
"modele"=>"required",
"categorie_id"=>"required",
"marque_id"=>"required",

         ]);
        Lot::create($request->all());
    return back()->with("success","LOT ajouté avec succes");
}








}
