<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header bg-primary">
                <h3 class="card-title"><i class="fas"></i>Liste des Marques</h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent='goToAddMar()' ><i class="fa fa-plus"></i>Nouvelle Marque </a>
                  <div class="input-group input-group-md" style="width: 250px;">
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

              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="width:10%;">ID</th>
                      <th style="width:30%;">Designation</th>
                      <th style="width:20%;">Categorie</th>
                      <th style="width:25%;" class="text-center">Ajouté </th>
        
                      <th style="width:15%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($marques as $marque )
                     
                   
                    <tr>
                      <td>{{$marque->id}}</td>
                      <td>{{$marque->nom}}</td>
                      <td>{{$marque->categorie->nom}}</td>
                      <td class="text-center"><span class="tag tag-success">{{ $marque->created_at->diffForHumans()}}</span></td>
                      <td class="text-center"> 
                      
                      <button class="btn btn-link" wire:click="confirmDelete('{{$marque->nom}}','{{$marque->id}}')"><i class="far fa-trash-alt"></i></button>
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                {{ $marques->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
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
    @this.deleteMarq(event.detail.message.data.marqid)
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
  