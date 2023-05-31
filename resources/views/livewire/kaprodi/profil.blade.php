<div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex flex-column ">
          <div class="profile-image-wrapper">
            <img src="{{ asset('logo.png') }}" class="profile-image" alt="Profile">
          </div>
            <div class="row">
                <h4 class="profile-title mt-3">Kaprodi</h4>
                <div class="profile-info mt-3">
                    <p class="profile-name">nama</p>
                    <p class="profile-nim">npm</p>
                    <p class="profile-email"></p>
                    <p class="profile-phone"></p>
                </div>
            </div>
        </div>
        <style>
          .profile-image-wrapper {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #474afc7c;
            box-shadow: 0px 0px 0px 5px #5500f1;
            position: relative;
            margin-bottom: 20px;
          }
          
          .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
          
          .profile-title {
            margin: 0;
          }
          
          .profile-info {
            text-align: center;
          }
          
          .profile-name {
            margin-bottom: 5px;
            font-weight: bold;
          }
          
          .profile-nim,
          .profile-email,
          .profile-phone {
            margin-bottom: 0;
          }
          </style>
          
           
      </div>
    </div>
</div>