<div>
    @livewire(('kaprodi.sidang'))
    @if($selection=='Tertutup')
      @livewire(('kaprodi.tertutup.idx'))
    @else
      @livewire(('kaprodi.terbuka.idx'))
    @endif
</div>
