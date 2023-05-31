@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <b>Menu</b> | Aplikasi Teknologi Jaringan
                </div>
                <div class="card-body">
                    @livewire('atj.select-menu', key('atj.home'))
                </div>
            </div>
        </div>
    </div>
</div>
@endsection