<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Marque;
use Livewire\Component;
use Livewire\WithPagination;


class Marques extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";
    
    
    public $isBtnAddMarqueClicked=false;
    public $newMarq = [];
   

    public function render()
    {
        return view('livewire.marques.index',[
            "categories"=>Categorie::all(),
            "marques"=> Marque::latest()->paginate(4)
        ]) 
        ->extends("layout.master")
        ->section("contenu");
    }

    public function goToAddMar(){
      
        $this->isBtnAddMarqueClicked=true;
    }

    public function goToListMarq(){
        $this->isBtnAddMarqueClicked=false;
    }

    public function addMarq(){
      $info=$this->newMarq;
        Marque::create($info);
        $this->newMarq=[];
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"MARQUE cree avec succés!"]);
     }

     public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
 "text" => "vous etes sur le point de supprimer la MARQUE $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
 "data"=> [ "marqid"=> $id ],
    
    
         ] ]);  
    }

public function deleteMarq($id){
    Marque::destroy($id);
    $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Marque supprimee avec succés!"]);
}

}
