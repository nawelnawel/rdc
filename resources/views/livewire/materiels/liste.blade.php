<div class="row  p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header  bg-info">
                <h3 class="card-title">Liste Des Materiels</h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-6 d-block" wire:click.prevent='goToAddMateriel()' ><i class="fa fa-plus"></i>Nouveau Lot</a>
                  <div class="input-group input-group-sm" style="width: 150px;">
                   
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>N°serie</th>
                      <th>Code Barre</th>
                      <th>N°Lot</th>
                      <th>Designation</th>
                      <th>Etat</th>
                      <th class="text-center">Statut</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>


                   @foreach ($materiels as $materiel )
                  <tbody>
                    <tr>
                      <td>{{$materiel->id}}</td>
                      <td>{{$materiel->num_serie}}</td>
                      <td>{{$materiel->codebarre}}</td>
                      <td>{{$materiel->lot->num_lot}}</td>
                      <td>{{$materiel->nom}}</td>
                      <td><span class="tag tag-success">{{$materiel->etat}}</span></td>
                      <td class="text-center">
                      @if($materiel->affectation)
                        affecté
                      @else
                        non affecté 
                      @endif
                      </td>
                      <td class="text-center">
                      <button class="btn btn-link"><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link" wire:click="confirmDelete('{{$materiel->num_serie}}','{{$materiel->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                    </tr>
                    
               



                       @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
             <div class ="card-footer">
                 <div class="float-right"> 
                {{ $materiels->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->

             <!-- /.card -->

   
             </div>
          </div>
</div>
<script>
  window.addEventListener("showConfirmMessage",event=>{
     Swal.fire({
  title: event.detail.message.title,
  text: event.detail.message.text,
  icon: event.detail.message.type,
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Continuer',
   cancelButtonText: 'Annuler',
}).then((result) => {
  if (result.isConfirmed) {
    @this.deleteMateriel(event.detail.message.data.materielid)
  }
})
  })
   
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:event.detail.message,
          showConfirmButton:false,
          timer:3500
      })
  })
  
  
  </script>
  