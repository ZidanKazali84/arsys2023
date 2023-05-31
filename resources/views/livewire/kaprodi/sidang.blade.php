<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item ">
              <a class="nav-link" id="Terbuka-tab" href="#" style="cursor:pointer" wire:click="selectMenu('Terbuka')" data-toggle="tab" role="tab" aria-controls="Terbuka" aria-selected="true">Sidang Terbuka</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Tertutup-tab" href="#" style="cursor:pointer" wire:click="selectMenu('Tertutup')" data-toggle="tab" role="tab" aria-controls="Tertutup" aria-selected="false">Sidang Tertutup</a>
            </li>
          </ul>
        </div>
    </nav>
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">
            <div x-data="{TertutupTab : @entangle('TertutupTab')}">
              <div x-show="TertutupTab">
                  <livewire:kaprodi.tertutup.idx :wire:key="'kaprodi-tertutup-idx'">
              </div>
            </div>
            <div x-data="{TerbukaTab : @entangle('TerbukaTab')}">
              <div x-show="TerbukaTab">
                  <livewire:kaprodi.terbuka.idx :wire:key="'kaprodi-terbuka-idx'">
              </div>
            </div>
          </div>
        </div>
      </div>    
@push('script')
<script>
    $(document).ready(function(){
        window.livewire.on('TertutupActive',()=>{
            $('#Tertutup').addClass('active');
            $('#Terbuka').removeClass('active');
            
        });
        window.livewire.on('TerbukaActive',()=>{
            $('#Terbuka').addClass('active');
            $('#Tertutup').removeClass('active');
            
        });
        
}); 
</script>
@endpush 
</div> 
