<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
    
        $categories = Categorie::all() ->sortBy('nom');
       
        return view("categorie", compact('categories'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view("createCategorie", compact("categories"));
    }


    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",

        ]);
        Categorie::create($request->all());
        return back()->with("success", "Categorie ajoutée avec succes");
    }



    public function edit(Categorie $categorie)
    {
        $categories = Categorie::all();
        return view("editCategorie", compact("categorie", "categories"));
    }


    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            "nom" => "required",



        ]);

        $categorie->update([
            "nom" => $request->nom,



        ]);

        return back()->with("success", "categorie mis a jour avec succes");
    }

    public function delete(Categorie $categorie) {
        $nom_cat= $categorie->nom;
        $categorie->delete(); 
        return back()->with("successDelete","La Categorie  $nom_cat est  supprimée avec succes!");
    
    }






}
