<?php

namespace App\Http\Livewire;

use App\Models\Structure;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
class Structures extends Component
{

    use WithPagination;

    protected $paginationTheme="bootstrap";

    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;
    public $newStructure = [];
    public $editStructure = [];

    public function rules(){
        if($this->isBtnEditClicked){
            return  [ 
                'editStructure.nom_struct'=> ['required', Rule::unique("structures", "nom_struct")->ignore($this->editStructure['id'])],
               
               
            
            ];
        }
        return [ 
           
            'newStructure.nom_struct'=> 'required|unique:structures,nom_struct'
            
          
        
        ];
    }
    public function render()
    {
        return view('livewire.structures.index',[
            "structures"=>Structure::paginate(5)
        ])


                 ->extends('layout.master')
                ->section('contenu');

    }

    public function goToAddStructure(){
        $this->isBtnAddClicked=true;
    }
    public function goToListStructure(){
        $this->isBtnAddClicked=false;
        $this->isBtnEditClicked=false;
        $this->editStructure = [];
  }


  public function goToEditStructure($id){
    $this->editStructure = Structure::find($id)->toArray();
    $this->isBtnEditClicked=true;

}



public function addStructure(){
    
    //vérifier les information envoyée  ask correctes
      $validationAttributes = $this->validate();
      
    //ajouter un nouvel utilisateur
    Structure::create($validationAttributes["newStructure"]);

    $this->newStructure = [];
   

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"structure créé avec succés"]);
}


public function updateStructure(){
    $validationAttributes = $this->validate();

    Structure::find($this->editStructure["id"])->update($validationAttributes["editStructure"]);
   $this->dispatchBrowserEvent("showSuccessMessage" , ["message"=> "structure mis a jour avec succes"]);
}


public function confirmDelete( $id){
    $this->dispatchBrowserEvent("showConfirmMessage", ["message"=>[
    "text" => "vous etes sur le point de supprimer $id de la listes des structures, voulez-vous continuer",
    "title" => "Etes-vous sur de continuer?",
    "type" => "warning",
   "data" => [
       "structure_id" => $id
   ]

    ]]);
}


public function deleteStructure($id){
    Structure::destroy($id);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"structure supprimer avec succés"]);
}














}
