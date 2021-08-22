<?php

namespace App\Http\Controllers;


use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{

    public function index()
    {
    
        $structures = Structure::all() ->sortBy('nom_structure');
       
        return view("structure", compact('structures'));
    }

    public function create()
    {
        $structures = Structure::all();
        return view("createStructure", compact("structures"));
    }


    public function store(Request $request)
    {
        $request->validate([
            "nom_structure" => "required",
            

        ]);
        structure::create($request->all());
        return back()->with("success", "structure ajoutée avec succes");
    }



    public function edit(structure $structure)
    {
        $structures =structure::all();
        return view("editStructure", compact("structure", "structures"));
    }


    public function update(Request $request, structure $structure)
    {
        $request->validate([
            "nom_structure" => "required",
            "nbr_personnels"=> "required",


        ]);

        $structure->update([
            "nom_structure" => $request->nom_structure,
            "nbr_personnels"=> $request->nbr_personnels,


        ]);

        return back()->with("success", "structure mis a jour avec succes");
    }

    public function delete(Structure $structure) {
        $nom_str= $structure->nom_structure;
        $structure->delete(); 
        return back()->with("successDelete","La structure  $nom_str est  supprimée avec succes!");
    
    }






}
