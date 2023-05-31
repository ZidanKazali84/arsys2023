<div >
  <div class="card card-dark">
    @foreach ($news as $item)
      <div class="card-header">
          <h3 class="card-title">
            {{$item->judul}}
          </h3>
          <div class="card-tools">
              <span class="badge badge-black">{{$item->updated_at}}</span>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body text bg-saja" style="font-family: 'Open Sans', sans-serif;">
       <div class="row">
          <div class= "col-lg-1 bg-black">
            <p class="type-text"> Jenis Berita</p>
          </div>
          <div class= "col-lg-11">
            <span class="fas fa-lg fa-newspaper" style="margin-right: 10px;">ArsysNews</span> 
            @foreach(explode("\n", $item->isi) as $paragraph)
              <p>{{$paragraph}}</p>
            @endforeach
          </div>
        </div>
      <div class="card-footer text bg-foot">
          penulis : {{$item->author}}
          <div class="d-flex justify-content-end">
              <span class="badge badge" style="font-style: italic;">@ArSys-2023</span>
          </div>
      </div>
    @endforeach
  </div>
</div> 