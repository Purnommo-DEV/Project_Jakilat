@extends('SuperAdmin/layouts/master')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">DataTables.Net</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Customer" aria-controls="Customer">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Member" aria-controls="Member" >Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Admin" aria-controls="Admin" >Admin</a>
                    </li>
                </ul>
                <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                    <div class="tab-pane fade show active" id="Customer" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                        @include('SuperAdmin.User.Role.customer')
                    </div>
                    <div class="tab-pane fade" id="Member" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                        @include('SuperAdmin.User.Role.member')
                    </div>
                    <div class="tab-pane fade" id="Admin" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                        @include('SuperAdmin.User.Role.admin')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
</div>
@endsection
@section('footer')
    <script>
    //Jika ada class yang bernama delete lalu di klik maka jalankan function() dan tampilkan alert(1) atau pesan
    $('.delete').click(function(){
        //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
        var artikel_id = $(this).attr('artikel-id');
        swal({
        title: "Yakin ?",
        text: "Menghapus Data ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/AdminArtikel-delete/"+artikel_id;
                }
            });
        });
    </script>
@stop