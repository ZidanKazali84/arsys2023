<div>
    @livewire(('atj.menu'))
    @if($selection=='news')
      @livewire(('atj.news.idx'))
    @else
      @livewire(('atj.home.idx'))
    @endif
</div>
