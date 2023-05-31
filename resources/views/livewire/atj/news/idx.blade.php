<div class="card-body">
  @if ($modeNews!= 'add')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav ml-auto">
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </ul>
    </nav>
    <x-adminlte-select label="Select News" style="width: 100%" wire:click="cari" id="News" name="News">
      <option default>pilih berita yang akan dibaca</option>
      @foreach ($allNews as $index => $news)
      <option value="{{$news->id}}"> {{$news->judul}}</option>
      @endforeach
    </x-adminlte-select>
    @if (!is_null($cari))
      @if ($modeNews!= 'add')
         
        <div class="d-flex justify-content-end">
          <x-adminlte-button theme="warning" class="btn btn-sm btn-success" icon="far fa-light fa-edit" wire:click="editNews" label="Edit News" style="max-width: 150px;"/>
        </div>
      @else
      @livewire(('atj.news.edit'))
      @endif
    @else
      belum ada berita yang dipilih  
    @endif  
    <div>
      <x-adminlte-button theme="success" class="btn btn-sm btn-success" icon="far fa-light fa-edit" wire:click="addNews" label="Add News" style="max-width: 150px;"/>
    </div>
    
  @else
    @livewire(('atj.news.add'))
  @endif
</div>  
<style>
  .bg-black {
    background-color: #00000041; /* warna hitam */
    color: #FFFFFF; /* warna teks putih */
  }
  .bg-saja {
    background-color: #99d4cc; /* warna hitam */
    color: #221f1fbd; /* warna teks putih */
  }
  .bg-foot {
    background-color: #6ea59e79; /* warna hitam */
    color: #00000096; /* warna teks putih */
  }
  .type-text {
    color: #FFFFFF;
    font-size: 30px;
    text-align: center;
    writing-mode: vertical-lr;
    text-orientation: mixed;
    text-transform: uppercase;
    letter-spacing: 5px;
    margin: 0;
    text-indent: 25px;
    
  }
</style>
