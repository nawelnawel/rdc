<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

    public $isBtnAddClicked=false;

    protected $rules = [
        'newCat.nom' => 'required|unique:categories,nom',
        
    ];

    protected $messages = [ 
        'newCat.nom.required'=>"veuillez saisir une categorie ",
        'newCat.nom.unique'=>"cette categorie existe deja ! "
    ];
  
    public $newCat = [];
   
    public function render()
    {
        return view('livewire.categories.index',[
            "categories"=> Categorie::latest()->paginate(4)
        ]) 
        ->extends("layout.master")
        ->section("contenu");
    }
  
    public function goToAddCat(){
        $this->isBtnAddClicked=true;
    }
    
    public function goToListCat(){
        $this->isBtnAddClicked=false;
    }

    public function addCat(){
       $validationAttributes= $this->validate();
       Categorie::create($validationAttributes["newCat"]);
       $this->newCat=[];
       $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Categorie cree avec succés!"]);
    }


    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
 "text" => "vous etes sur le point de supprimer la categorie $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
 "data"=> [ "catid"=> $id ],
    
    
         ] ]);  
    }

public function deleteCat($id){
    Categorie::destroy($id);
    $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Categorie supprimee avec succés!"]);
}

}


