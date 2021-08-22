<div>

 
@if ($isBtnEditMaterielClicked)

@include("livewire.materiels.edit")



@else

@if ($isBtnAddMaterielClicked)

@include("livewire.materiels.create")

@else

@include("livewire.materiels.liste")

@endif

@endif



</div>
