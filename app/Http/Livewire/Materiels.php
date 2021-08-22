<?php

namespace App\Http\Livewire;

use App\Models\Lot;
use App\Models\Materiel;
use Livewire\Component;
use Livewire\WithPagination;

class Materiels extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";

   public $isBtnAddMaterielClicked=false;

   public $editMateriel=[];
   public $newMateriel=[];

   public $isBtnEditMaterielClicked=false;


    public function render()
    {
        return view('livewire.materiels.index',[
            "lots"=> Lot::all(), 
            
            "materiels"=> Materiel::latest()->paginate(4)
        ]) 
        ->extends("layout.master")
        ->section("contenu");
    }
    


     //renvoie la page create
     public function goToAddMateriel(){
        $this->isBtnAddMaterielClicked=true;

    }


//renvoi la page liste
  public function goToListMateriel(){
      
      $this->isBtnAddMaterielClicked=false;
  }


   //fct dajout de lot 
   public function addMateriel(){
    $info=$this->newMateriel;
      Materiel::create($info);

      $this->newMateriel=[];
      $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Materiel cree avec succés!"]);
   }

//suppression lot 
public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
"text" => "vous etes sur le point de supprimer le Materiel $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
"data"=> [ "materielid"=> $id ],


     ] ]);  
}

public function deleteMateriel($id){
Materiel::destroy($id);
$this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Materiel supprimee avec succés!"]);
}





}