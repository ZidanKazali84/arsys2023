<div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item ">
                <a class="nav-link" id="Home-tab" href="#" style="cursor:pointer" wire:click="selectMenu('Home')" data-toggle="tab" role="tab" aria-controls="Home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="News-tab" href="#" style="cursor:pointer" wire:click="selectMenu('News')" data-toggle="tab" role="tab" aria-controls="News" aria-selected="false">News</a>
              </li>
            </ul>
          </div>
      </nav>
        <div class="card">
          <div class="card-body">
            <div class="col-lg-12">
              <div x-data="{NewsTab : @entangle('NewsTab')}">
                <div x-show="NewsTab">
                    <livewire:atj.news.idx :wire:key="'atj-news-idx'">
                </div>
              </div>
              <div x-data="{HomeTab : @entangle('HomeTab')}">
                <div x-show="HomeTab">
                    <livewire:atj.home.idx :wire:key="'atj-home-idx'">
                </div>
              </div>
            </div>
          </div>
        </div>    
  @push('script')
  <script>
      $(document).ready(function(){
          window.livewire.on('NewsActive',()=>{
              $('#News').addClass('active');
              $('#Home').removeClass('active');
              
          });
          window.livewire.on('HomeActive',()=>{
              $('#Home').addClass('active');
              $('#News').removeClass('active');
              
          });
          
  }); 
  </script>
  @endpush 
</div> 
