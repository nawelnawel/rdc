<div>

 
@if ($isBtnEditClicked)

@include("livewire.structures.edit")



@else

@if ($isBtnAddClicked)

@include("livewire.structures.create")

@else

@include("livewire.structures.liste")

@endif

@endif



</div>
