<div>

 
@if ($isBtnEditClicked)

@include("livewire.personnels.edit")



@else

@if ($isBtnAddClicked)

@include("livewire.personnels.create")

@else

@include("livewire.personnels.liste")

@endif

@endif



</div>
