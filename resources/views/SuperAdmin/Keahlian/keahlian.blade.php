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
            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahKeahlian">Tambah Keahlian</button>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keahlian as $item)
                            <tr>
                                <td>{{ $item->keahlian }}</td>
                                <td>
                                    <form action="{{ route('keahlian.destroy', $item->id) }}" method="POST">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editKeahlian-{{ $item->id }}">Edit</button>    
                                
                                        @csrf
                                        @method('DELETE')
                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                            </td>
                                    </form>
                            </tr>
                            <div class="modal fade" id="editKeahlian-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">Edit Keahlian</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('keahlian.update', $item->id) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label class="control-label">
                                                            Keahlian
                                                        </label>
                                                        <input type="text" value="{{ $item->keahlian }}" name="keahlian">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tambahKeahlian" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Keahlian</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('keahlian.store') }}" method="POST">
                @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label">
                                Keahlian
                            </label>
                            <input type="text" name="keahlian">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
    
</div>
@endsection
@section('footer')
    <script>
    //Jika ada class yang bernama delete lalu di klik maka jalankan function() dan tampilkan alert(1) atau pesan
        $('#hapus-keahlian-pilihan').on('click', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
        swal({
        title: "Yakin ?",
        text: "Menghapus Data ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((result) => {
                if (result.isConfirmed) {
                    $('#hapus-keahlian-form').submit();
                }
            });
        });
    </script>
@stop