<div class="row p-4 pt-5">

       <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Formulaire d'edition  utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="updatePersonnel()">
                <div class="card-body">
                  <div class="d-flex">
                      <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>
                        <input type="text" wire:model="editPersonnel.nom" class="form-control @error('editPersonnel.nom') is invalide @enderror">
                        @error("editPersonnel.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Prenom</label>
                         <input type="text" wire:model="editPersonnel.prenom" class="form-control @error('editPersonnel.prenom') is invalide @enderror">
                        @error("editPersonnel.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>  
                   
                  
                  <div class="form-group ">
                    <label >Adresse</label>
                    <input type="text" wire:model="editPersonnel.adresse" class="form-control @error('editPersonnel.adresse') is invalide @enderror">
                        @error("editPersonnel.adresse")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                    <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Date de Naissance</label>
                        <input type="text" wire:model="editPersonnel.dateNaissance" class="form-control @error('editPersonnel.dateNaissance') is invalide @enderror">
                        @error("editPersonnel.dateNaissance")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Lieu de naissance</label>
                         <input type="text" wire:model="editPersonnel.lieuNaissance" class="form-control @error('editPersonnel.lieuNaissance') is invalide @enderror">
                        @error("editPersonnel.lieuNaissance")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                   
                     <div class="form-group  ">
                           <label >Adresse E-mail</label>
                           <input type="text" wire:model="editPersonnel.email" class="form-control @error('editPersonnel.email') is invalide @enderror">
                             @error("editPersonnel.email")
                                 <span class="text-danger">{{ $message }}</span>
                              @enderror
                       </div>
                   <div class="form-group ">
                          <label >Telephone</label>
                          <input type="text" wire:model="editPersonnel.telephone" class="form-control @error('editPersonnel.telephone') is invalide @enderror">
                        @error("editPersonnel.telephone")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                   
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                       <label >Piece Identité</label>
                       <select class="form-control flex-grow-1  @error('editPersonnel.piecIdentite') is invalide @enderror" wire:model="editPersonnel.pieceIdentite" >
                          <option value="CNI">CNI<option>
                          <option value="PERMIS DE CONDUIRE">Permet de conduire<option>
                          <option value="PASSPORT">Passport<option>
                         </select>
                          @error("editPersonnel.pieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                   <div class="form-group">
                        <label >Numero de piece d'identité</label>
                         <input type="text"  wire:model="editPersonnel.numeroPieceIdentite"  placeholder="Numero de piece d'identité"class="form-control  @error('editPersonnel.numeroPieceIdentite') is invalide @enderror">
                         @error("editPersonnel.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                          @enderror 
                      </div>
                </div>
                 
                 
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Appliquer les modification</button>
                   <button type="button" wire:click="goToListPersonnel()" class="btn btn-danger">liste des utilisateur</button>
                </div>
              </form>
            </div>
        </div>
      


   
          
         </div>
      </div>
    </div>
  </div>  
