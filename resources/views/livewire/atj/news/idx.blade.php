<div class="card-body">
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
  <x-adminlte-select label="Select News" style="width: 100%" wire:model="News" id="News" name="News">
    <option default>pilih berita yang akan dibaca</option>
    
  </x-adminlte-select>
  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">Judul</h3>
      <div class="card-tools">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        <span class="badge badge-primary">tanggal</span>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      Isi Berita
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      penulis
    </div>
    <!-- /.card-footer -->
  </div>
  <div>
      <a href="{{ route('atj.news') }}" class="btn btn-sm btn-success" style="max-width: 150px;">
        <i class="far fa-light fa-edit"></i> Add News
      </a>
  </div>
</div>    