@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <b>Data</b> | Acara Sidang Mahasiswa
                </div>
                <div class="card-body">
                   @livewire('kaprodi.sidang')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection