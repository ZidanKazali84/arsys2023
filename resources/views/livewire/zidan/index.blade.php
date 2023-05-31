@extends('adminlte::page')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h5 class="card-title">MY Profile</h5>
    <div class="card-tools">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <span class="badge badge-primary"> Arsys2023 </span>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-lg-2">
        <div class="d-flex flex-column align-items-center text-center">
          <div class="profile-image-wrapper">
            <img src="{{ asset('logo.png') }}" class="profile-image" alt="Profile">
          </div>
          <h4 class="profile-title mt-3">Electronics Engineering</h4>
          <div class="profile-info mt-3">
            <p class="profile-name">{{$student->first_name}} {{$student->last_name}}</p>
            <p class="profile-nim">{{$student->student_id}}</p>
            <p class="profile-email">{{$student->email}}</p>
            <p class="profile-phone">{{$student->phone}}</p>
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
      <div class="col-lg-10">
        <div class="card card-info">
          <div class="card-header">
            <div class="card-tools">
              <!-- This will cause the card to maximize when clicked -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
              <!-- This will cause the card to collapse when clicked -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <!-- This will cause the card to be removed when clicked -->
            </div>
          <h2 class="text-center">Biodata</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3">
                      <p class="card-text">{{ "NIK"  }}</p>
                      <p class="card-text">{{ "Alamat Rumah" }}</p>
                      <p class="card-text">{{ "Status Mahasiswa"  }}</p>
                      <p class="card-text">{{"Nama Ayah"  }}</p>
                      <p class="card-text">{{ "Nama Ibu" }}</p>
                      <p class="card-text">{{ "No.Asuransi/BPJS" }}</p>
                      <p class="card-text">{{ "Jenis kelamin"  }}</p>
                      <p class="card-text">{{"Agama"  }}</p>
                      <p class="card-text">{{ "Program Studi" }}</p>
                      <p class="card-text">{{ "Konsentrasi" }}</p>
                      <p class="card-text">{{ "Fakultas"  }}</p>
                      <p class="card-text">{{ "Dosen Wali"  }}</p>
                      <p class="card-text">{{"Tahun Masuk"  }}</p>
              </div>
              <div class="col-lg-7">
                      <p class="card-text">: {{ "320414300602"  }}</p>
                      <p class="card-text">: {{ "Kp.Waas Rt 02/03 Desa Sukasari Kecamatan Pameungpeuk" }}</p>
                      <p class="card-text">: {{ "Terdaftar"  }}</p>
                      
                      <p class="card-text">: {{"Cucu Taryana"  }}</p>
                      <p class="card-text">: {{ "Rina" }}</p>
                      <p class="card-text">: {{ "0001515662965" }}</p>
                      <p class="card-text">: {{ "Laki-laki"  }}</p>
                      <p class="card-text">: {{"Islam"  }}</p>
                      <p class="card-text">: {{$student->program->code}}-{{$student->program->description}}</p>
                      <p class="card-text">: {{$student->specialization->abbrev}}-{{$student->specialization->description}}</p>
                      <p class="card-text">: {{$student->program->department->faculty->description}} {{ "(" }}{{$student->program->department->faculty->abbrev}}{{ ")" }}</p>
                      <p class="card-text">: {{$student->supervisor->front_title}} {{$student->supervisor->first_name}} {{$student->supervisor->last_name}}, {{$student->supervisor->rear_title}}</p>
                      <p class="card-text">: {{"2020"  }}</p>
              </div>
            </div> 
          </div> 
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <div class="d-flex justify-content-end">
      <a href="{{ route('arsys.user.profile.edit') }}" class="btn btn-sm btn-warning" style="max-width: 150px;">
        <i class="fa fa-edit"></i> Edit
      </a>
    </div>    
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->

@endsection
