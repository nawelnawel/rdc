<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter une Marque </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addMarq()'>

                <div class="card-body">
                  <div class="form-group">
                   <label for="exampleInputRounded0" >Designation </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newMarq.nom' @error('newMarq.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newMarq.nom') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
                   
                        <label for="exampleSelectRounded0">Categorie</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMarq.categorie_id'>
                               @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>  
                    @endforeach
                  </select>

                  <br>
                  <br>



                  

                 <br>
                 <br>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListMarq()'>ANNULER</button>
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
          title:"MARQUE cree avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  