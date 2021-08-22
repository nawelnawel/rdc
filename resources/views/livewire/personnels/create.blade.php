<div class="row p-4 pt-5">
       <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Creation d'un nouvel utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="addPersonnel()">
                <div class="card-body">
                  <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>
                        <input type="text" wire:model="newPersonnel.nom" class="form-control @error('newPersonnel.nom') is invalide @enderror">
                        @error("newPersonnel.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Prenom</label>
                         <input type="text" wire:model="newPersonnel.prenom" class="form-control @error('newPersonnel.prenom') is invalide @enderror">
                        @error("newPersonnel.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                  
                  <div class="form-group ">
                    <label >Adresse</label>
                    <input type="text" wire:model="newPersonnel.adresse" class="form-control @error('newPersonnel.adresse') is invalide @enderror">
                        @error("newPersonnel.adresse")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  
                    <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Date de Naissance</label>
                        <input type="text" wire:model="newPersonnel.dateNaissance" class="form-control @error('newPersonnel.dateNaissance') is invalide @enderror">
                        @error("newPersonnel.dateNaissance")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Lieu de naissance</label>
                         <input type="text" wire:model="newPersonnel.lieuNaissance" class="form-control @error('newPersonnel.lieuNaissance') is invalide @enderror">
                        @error("newPersonnel.lieuNaissance")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                   
                     <div class="form-group  ">
                    <label >Adresse E-mail</label>
                    <input type="text" wire:model="newPersonnel.email" class="form-control @error('newPersonnel.email') is invalide @enderror">
                        @error("newPersonnel.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Telephone</label>
                    <input type="text" wire:model="newPersonnel.telephone" class="form-control @error('newPersonnel.telephone') is invalide @enderror">
                        @error("newPersonnel.telephone")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   
                  <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                       <label >Piece Identité</label>
                       <select class="form-control flex-grow-1  @error('newPersonnel.piecIdentite') is invalide @enderror" wire:model="newPersonnel.pieceIdentite" >
                          <option value="CNI">CNI<option>
                          <option value="PERMIS DE CONDUIRE">Permet de conduire<option>
                          <option value="PASSPORT">Passport<option>
                         </select>
                          @error("newPersonnel.pieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label >Numero de piece d'identité</label>
                    <input type="text"  wire:model="newPersonnel.numeroPieceIdentite"  placeholder="Numero de piece d'identité"class="form-control  @error('newPersonnel.numeroPieceIdentite') is invalide @enderror">
                        @error("newPersonnel.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                  </div>
                  </div>
                  
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                   <button type="button" wire:click="goToListPersonnel()" class="btn btn-danger">liste des Personnel</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
