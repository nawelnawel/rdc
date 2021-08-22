<div class="row p-4 pt-5">
       <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Creation d'un nouvel utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="addStructure()">
                <div class="card-body">
                  <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Nom Structure</label>
                        <input type="text" wire:model="newStructure.nom_struct" class="form-control @error('newStructure.nom_struct') is invalide @enderror">
                        @error("newStructure.nom_struct")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                  
                  
                 
                  
                
                   
                   
                
                 
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                   <button type="button" wire:click="goToListStructure()" class="btn btn-danger">liste des Structures</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>

 <script>
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:"STRUCTURE cree avec succes !",
          showConfirmButton:false,
          timer:4500
      })
  })
  
  </script>