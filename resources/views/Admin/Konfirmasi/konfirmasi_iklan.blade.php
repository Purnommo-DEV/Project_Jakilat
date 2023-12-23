@extends('Admin/layouts/master')

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
                <div class="card-header">
                    <a href="#" data-toggle="modal" data-target="#tmbArtikel" class="btn btn-primary">Tambah Artikel</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover text-center">
                            <thead>

                                <tr>
                                    <th>Kode Member</th>
                                    <th>Name Pengirim</th>
                                    <th>Asal Bank</th>
                                    <th>Nomor Rekening</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Waktu Verifikasi</th>
                                    <th>Batas Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($iklan_member as $iklan)
                                    @foreach ($detailMember as $detail)
                                        @if ($iklan->id_user == $detail->id_user)
                                            @if ($detail->wilayah_id == $profile_admin->wilayah_id)
                                                <tr>
                                                    <td style="width: 20%">{{ $detail->user->id }}</td>
                                                    <td style="width: 20%">{{ $iklan->nama }}</td>
                                                    <td style="width: 20%">{{ $iklan->nama_bank }}</td>
                                                    <td style="width: 20%">{{ $iklan->nomor_rekening }}</td>
                                                    <td style="width: 20%">{{ $iklan->created_at }}</td>
                                                    <td style="width: 20%">{{ $iklan->updated_at }}</td>
                                                    <td style="width: 20%">{{ $iklan->expire_date }}</td>
                                                    
                                                    <td style="width: 20%">
                                                        @if ($iklan->status_konfirmasi == 1)
                                                            <a href="#" class="btn btn-primary">Telah Di Verifikasi</a>
                                                        @else
                                                        <a href="#" uk-icon="trash" class="btn btn-info warnaMerah verifikasi" uk-tooltip="Verifikasi" 
                                                            verifikasi-id="{{$iklan->id}}">Verifikasi
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif    
                                        @endif
                                    @endforeach
            {{-- -----------------------------Modal Edit Kategori--------------------------------- --}}
                                        {{-- <div class="modal fade" id="m_edit-{{ $artikels->id }}">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title">Tambah Artikel</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="{{url('/AdminArtikel-update',$artikels->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$artikels->id}}" hidden>
                                                    <div class="modal-body">
                                                        <div class="form-group mb-3">
                                                            <label>Judul</label>
                                                            <input type="text" name="judul" value="{{$artikels->judul}}" class="form-control" required>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>Isi</label>
                                                            <textarea type="text" name="isi" class="ckeditor form-control" required>{{$artikels->isi}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>Gambar</label>
                                                            <input type="file" name="gambar" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div> --}}
            {{-- -----------------------------/Modal Edit Kategori--------------------------------- --}}
                                @endforeach
                            </tbody>
                        </table>
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
    $('.verifikasi').click(function(){
        //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
        var verifikasi_id = $(this).attr('verifikasi-id');
        swal({
        title: "Yakin ?",
        text: "Verifikasi Pembayaran Iklan ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/konfirmasiPembayaranIklan/"+verifikasi_id;
                }
            });
        });
    </script>
@stop