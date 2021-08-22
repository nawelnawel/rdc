<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un Lot</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addLot()'>

                <div class="card-body">
                  <div class="form-group">
                   <label for="exampleInputRounded0" >N°contrat</label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.num_lot' @error('newLot.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.num_lot') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
              
                   <label for="exampleInputRounded0" >N° AO</label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.num_ao' @error('newLot.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.num_ao') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>   
                        
                   <label for="exampleInputRounded0" >N° AP </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.num_ap' @error('newLot.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.num_ap') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>


                    <label for="exampleSelectRounded0">Categorie</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newLot.categorie_id'>
                               @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>  
                    @endforeach
                  </select>

<br>
<br>                  
                    <label for="exampleSelectRounded0">Marque</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newLot.marque_id'>
                        
                               @foreach ($marques as $marque)
                             
                                 
                                   <option value="{{$marque->id}}">{{$marque->nom}}</option>  
                                 
                               @endforeach
                        </select>
<br>
<br>
                  <label for="exampleInputRounded0" >Modele </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.modele' @error('newLot.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.modele') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
 <br>                 
                 <label for="exampleInputRounded0" >Fournisseur </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.fournisseur' @error('newLot.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.fournisseur') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>

                 <label for="exampleInputRounded0" >Quantite </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.qte' @error('newLot.qte') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.qte') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>


              <label for="exampleInputRounded0" >Cout </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newLot.cout' @error('newLot.cout') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newLot.cout') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>




                 <br>
                 <br>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListLot()'>Annuler</button>
                       </div> 
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

           
           

          </div>



</div>

 <script>
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:"Lot cree avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  