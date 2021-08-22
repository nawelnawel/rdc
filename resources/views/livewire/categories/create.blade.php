<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter une Categorie </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addCat()'>
                <div class="card-body">
                  <div class="form-group">
                   
                   <input class="form-control" type="text" placeholder="tapez ici" wire:model='newCat.nom'class='form-control @error('newCat.nom') is-invalid @enderror'>
                   @error('newCat.nom') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                 
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListCat()'>ANNULER</button>
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
          title:"Categorie cree avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  