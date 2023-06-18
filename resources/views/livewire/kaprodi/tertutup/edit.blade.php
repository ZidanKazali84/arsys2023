<div>
    <div class="card ">
    <div class="card-header bg-black">
        Form Edit Nilai
    </div>
    <div class="card-body bg-saja">
        <div class="row">
            <div class= "col-sm-4 text-right"style="font-family: Arial; font-weight: bold;">
                Judul Research
            </div>
            <div class= "col-sm-8">
                <x-adminlte-input  name="iBasic"/>
            </div>
        </div>
        <div class="row">
            <x-adminlte-input name="iUser" label="Nama Mahasiswa" placeholder="Nama Lengkap (disearching)" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-user"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="NIM" placeholder="Munculkan NIM" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="Prodi" placeholder="Munculkan Prodi" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
        <div class="row">
            <x-adminlte-input name="iUser" label="Pembimbing 1" placeholder="Nama Lengkap" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="Nilai" placeholder="Input Nilai" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
        <div class="row">
            <x-adminlte-input name="iUser" label="Pembimbing 2" placeholder="Nama Lengkap" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="Nilai" placeholder="Input Nilai" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
        <div class="row">
            <x-adminlte-input name="iUser" label="Penilai 1" placeholder="Nama Lengkap" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="Nilai" placeholder="Input Nilai" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
        <div class="row">
            <x-adminlte-input name="iUser" label="Penilai 2" placeholder="Nama Lengkap" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="Nilai" placeholder="Input Nilai" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
        <div class="row">
            <x-adminlte-input name="iUser" label="penilai 3" placeholder="Nama Lengkap" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <div style="width:5%"></div>
            <x-adminlte-input name="iUser" label="Nilai" placeholder="Input Nilai" label-class="text-black">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-foot">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
        <div class="row">
            <div class= "col-sm-12 text-right"style="font-family: Arial; font-weight: bold;">
                <x-adminlte-button theme="success" class="btn btn-sm btn-success" icon="fas fa-save" wire:click="saveNews" label="Save" style="max-width: 150px;"/>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-center">
            </div>
            <div class="col-sm-6 text-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="card-footer text bg-foot">
        <div class="d-flex justify-content-end">
            <span class="badge badge" style="font-style: italic;">@ArSys-2023</span>
        </div>
    </div>
   </div>
   <x-adminlte-button theme="info" class="btn btn-sm btn-success" icon="far fa-light fa-edit" wire:click="$emitUp('uploadAddNews')" label="Submit" style="max-width: 150px;"/>
</div>
<style>
    .bg-black {
      background-color: #000000; /* warna hitam */
      color: #000000; /* warna teks putih */
    }
    .bg-saja {
      background-color: #ffffff; /* warna hitam */
      color: #221f1fbd; /* warna teks putih */
    }
    .bg-foot {
      background-color: #ffffff; /* warna hitam */
      color: #00000096; /* warna teks putih */
    }
   
  </style>
  