<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Lot;
use App\Models\Marque;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
class Lots extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";

    public $editLot=[];
    public $newLot=[];

    public $isBtnEditLotClicked=false;
    public $isBtnAddLotClicked=false;

    public $currentPage =PAGELIST;



    public function rules(){
        if($this->isBtnEditLotClicked){

   return [ 

   'editLot.num_lot' =>['required', Rule::unique("lots", "num_lot")->ignore($this->editLot['id'])],
   'editLot.num_ao' =>'required',
   'editLot.num_ap' =>'required',
   'editLot.fournisseur' =>'required|string',
   'editLot.cout' =>'required|numeric',
   'editLot.qte' =>'required|integer',
   'editLot.modele' =>['required', 'string',Rule::unique("lots", "modele")->ignore($this->editLot['id'])],

  ];
 }
  return [ 

    'editLot.num_lot' =>'required|unique:lots,num_lot',
    'editLot.num_ao' =>'required',
    'editLot.num_ap' =>'required',
    'editLot.fournisseur' =>'required|string',
    'editLot.cout' =>'required|numeric',
    'editLot.qte' =>'required|integer',
    'editLot.modele' =>'required|string|unique:lots,modele',
 
  ];

    }




//renvoi la liste
    public function render()
    {
        return view('livewire.lots.index',[
            "categories"=> Categorie::all(), 
            "marques" => Marque::all(),
            "lots"=> Lot::latest()->paginate(6)
        ]) 
        ->extends("layout.master")
        ->section("contenu");
    }

    //renvoi la page edit 
    public function goToEditLot($id){
      $this->editLot=Lot::find($id)->toArray();
     
        $this->isBtnEditLotClicked=true;
    }

    //renvoie la page create
    public function goToAddLot(){
          $this->isBtnAddLotClicked=true;

      }
  

//renvoi la page liste
    public function goToListLot(){
        $this->isBtnEditLotClicked=false;
        $this->isBtnAddLotClicked=false;
    }


    //fct de modification lot 
    public function updateLot(){
     
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Lot::find($this->editLot["id"])->update($validationAttributes["editLot"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Lot mis à jour avec succès!"]);
    }

    //fct dajout de lot 
    public function addLot(){
        $info=$this->newLot;
          Lot::create($info);

          $this->newLot=[];
          $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"LOT cree avec succés!"]);
       }



//suppression lot 
public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
"text" => "vous etes sur le point de supprimer le LOT $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
"data"=> [ "lotid"=> $id ],


     ] ]);  
}

public function deleteLot($id){
Lot::destroy($id);
$this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Lot supprimee avec succés!"]);
}










}
