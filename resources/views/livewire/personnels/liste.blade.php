<div>
  
   
    <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"> <i class="fas fa-users fa-2x"></i> Liste des Personnels</h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddPersonnel()"> <i class="fas fa-user-plus"></i>
                  Nouvel Prsonnels</a>

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
                      <th style="width:5% ;"class="text-center">ID</th>
                     
                      <th style="width:25% ;"class="text-center">Prenom</th>
                      <th style="width:25% ;"class="text-center">Nom</th>
                       <th style="width:25% ;"class="text-center">email</th>
                      
                      <th style="width:20% ;">Date de Naissance</th>
                      <th style="width:25% ;"class="text-center">Lieu de naissance</th>
                      <th style="width:25% ;"class="text-center">Teléphone</th>
                      <th style="width:25% ;"class="text-center">Adresse</th>
                      <th style="width:25% ;"class="text-center">N° piece Identité</th>
                     {{-- <th style="width:25% ;"class="text-center">Nom structure</th>--}}
                    

                      <th style="width:20% ;"class="text-center">Ajouté</th>
                      <th style="width:30%;"class="text-center">Action</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach ($personnels as $personnel)
                    
                  
                    <tr>
                    <td class="text-center"> {{ $personnel->id }}</td>
                     
                      
                      <td class="text-center">
                         {{ $personnel->prenom }}
                      </td>
                      <td class="text-center"> {{ $personnel->nom }}</td>
                       <td class="text-center"> {{ $personnel->email }}</td>
                       <td class="text-center"> {{ $personnel->dateNaissance }}</td>
                        <td class="text-center"> {{ $personnel->lieuNaissance }}</td>
                         <td class="text-center"> {{ $personnel->telephone }}</td>
                          <td class="text-center"> {{ $personnel->adresse }}</td>
                          <td class="text-center"> {{ $personnel->numeroPieceIdentite }}</td>
                         
                     
                      <td class="text-center"><span class="tag tag-success">{{ $personnel->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link" wire:click="goToEditPersonnel({{$personnel->id}})"><i class="far fa-edit"></i></button>
                      <button class="btn btn-link" wire:click="confirmDelete('{{ $personnel->prenom }} {{ $personnel->nom }}',{{$personnel->id}})"><i class="far fa-trash-alt"></i></button>

                    </tr>
                   
                   
                     
                   
                    
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             <div  class="card-footer">
                <div class="float-right">
                 {{$personnels-> links()}}
                </div>
             </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
       
</div>
<script>
    window.addEventListener("showConfirmMessage", event=>{
    Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer!'
      }).then((result) => {
        if (result.isConfirmed) {
            @this.deletePersonnel(event.detail.message.data.user_id)
        }
      })
    })

</script>
