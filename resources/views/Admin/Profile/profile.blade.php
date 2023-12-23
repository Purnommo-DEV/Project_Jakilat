@extends('Admin/layouts/master')

@section('content')
<div class="page-inner">


<div class="row">
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                <div class="profile-picture">
                    <div class="avatar avatar-xl">
                        <img src="../member/foto_diri/{{ $profile_admin->foto_diri}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="user-profile text-center">
                    <div class="name">{{ $profile_admin->user->name }}</div>
                    <div class="job">{{ $profile_admin->user->role }}</div>
                    <div class="desc">{{ $profile_admin->wilayah->name }}</div>
                    <div class="social-media">
                        <a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
                            <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                        </a>
                        <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                            <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
                        </a>
                        <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                            <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                        </a>
                        <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                            <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
                        </a>
                    </div>
                    <div class="view-profile">
                        <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row user-stats text-center">
                    <div class="col">
                        <div class="number">125</div>
                        <div class="title">Post</div>
                    </div>
                    <div class="col">
                        <div class="number">25K</div>
                        <div class="title">Followers</div>
                    </div>
                    <div class="col">
                        <div class="number">134</div>
                        <div class="title">Following</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Nav Pills (Horizontal Tabs)</h4>
            </div>
            <div class="card-body">
                {{-- <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#Biodata" role="tab" aria-controls="pills-home" aria-selected="true">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Berkas" role="tab" aria-controls="pills-profile" aria-selected="false">Berkas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                </ul> --}}
                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="Biodata" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Nama Lengkap
                                    </label> 
                                    <p class="form-control-static">{{ $profile_admin->user->name }}</p> 
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Email
                                    </label> 
                                    <p class="form-control-static">{{ $profile_admin->user->email }}</p> 
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Role
                                    </label> 
                                    <p class="form-control-static">{{ $profile_admin->user->role }}</p> 
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Kota/Kabupaten
                                        </label> 
                                        <p class="form-control-static">{{ $profile_admin->wilayah->name }}</p> 
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Alamat
                                        </label> 
                                        <p class="form-control-static">{{ $profile_admin->alamat }}</p> 
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Nomor Hp
                                        </label> 
                                        <p class="form-control-static">{{ $profile_admin->nomor_hp }}</p> 
                                    </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">
                                        Deskripsi Diri
                                    </label> 
                                    <p class="form-control-static">{{ $profile_admin->deskripsi_diri }}</p> 
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailModal-{{ $profile_admin->id }}">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="detailModal-{{ $profile_admin->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Biodata Member</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
        <img src="../member/foto_diri/{{ $profile_admin->foto_diri }}" class="img-thumbnail" alt="">
          <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="form-group form-floating-label">
                        <input id="inputFloatingLabel"value="{{ $profile_admin->user->name }}" name="name" type="text" class="form-control input-border-bottom" required>
                        <label for="inputFloatingLabel" class="placeholder">Nama Lengkap</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group form-floating-label">
                        <input id="inputFloatingLabel"value="{{ $profile_admin->user->email }}" name="name" type="text" class="form-control input-border-bottom" required>
                        <label for="inputFloatingLabel" class="placeholder">Email</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-12">
                    <div class="form-group">
                        <option selected>Masukkan Kategori Wilayah</option>
                        <select name="wilayah_id" class="form-control wilayah" required>
                            @foreach ($kota as $item)  
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel"value="{{ $profile_admin->alamat }}" name="name" type="text" class="form-control input-border-bottom" required>
                            <label for="inputFloatingLabel" class="placeholder">Alamat</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel"value="{{ $profile_admin->nomor_hp }}" name="name" type="text" class="form-control input-border-bottom" required>
                            <label for="inputFloatingLabel" class="placeholder">Nomor HP</label>
                        </div>
                    </div>
            </div>
            
            <div class="col-md-6 col-lg-12">
                <div class="form-group">
                    <div class="form-group form-floating-label">
                        <input id="inputFloatingLabel"value="{{ $profile_admin->deskripsi_diri }}" name="name" type="text" class="form-control input-border-bottom" required>
                        <label for="inputFloatingLabel" class="placeholder">Deskripsi Diri</label>
                    </div>
                </div>
            </div>
        
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('js')
    <script>
      $(document).ready(function() {
          $('.wilayah').select2();
      });
    </script>
@endsection