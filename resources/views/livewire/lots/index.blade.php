<div>

 
@if ($isBtnEditLotClicked)

@include("livewire.lots.edit")



@else

@if ($isBtnAddLotClicked)

@include("livewire.lots.create")

@else

@include("livewire.lots.liste")

@endif

@endif



</div>
