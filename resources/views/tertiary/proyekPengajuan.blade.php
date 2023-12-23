@extends('layout/master')


@section('tittle', 'proyek Pengajuan')


@section('content')

<br><br>

<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <p class="text-center">Filter Pencarian Anda</p>
            <form class="uk-grid-small" uk-grid>
                <div class="uk-width-1-2@s">
                    <select class="uk-select">
                        <option>Pilih Kategori</option>
                        <option>Option 02</option>
                    </select>
                </div>
                <div class="uk-width-1-2@s">
                    <select class="uk-select">
                        <option>Pilih Wilayah</option>
                        <option>Option 02</option>
                    </select>
                </div>
            </form>
            <p></p>
            <div class="text-center">
                <button type="button" class="btn btn-info">Submit</button>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="container">
    <h1 class="uk-heading-line uk-text-center fw-bold"><span>Proyek Pengajuan</span></h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($proyekPenawaran as $item)

        <div class="col">
            <div class="card shadow">
                <div class="container"><br>
                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                        <li class="uk-active"><a href="#">{{ $item->user->name }}</a></li>
                        <li class="uk-parent">
                            <a href="#">Deskripsi Proyek</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">{{ $item->deskripsi }}</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">File Tambahan</a>
                            <ul class="uk-nav-sub">
                                <li><a href="../customer/berkas/{{ $item->berkas }}" download>Tekan untuk unduh</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-header">Pembangunan Taman Bermain</li>
                        <li><a href="#"><span class="uk-margin-small-right warnaBiru" uk-icon="icon: tag"></span> Harga
                                Tertinggi : {{ $item->harga_pembukaan}}</a></li>
                        <li><a href="#"><span class="uk-margin-small-right warnaBiru"
                                    uk-icon="icon: calendar"></span>{{ $item->batas_penerimaan}}</a></li>
                        <li><a href="#"><span class="uk-margin-small-right warnaBiru"
                                    uk-icon="icon: location"></span>{{ $item->lokasi_proyek}}</a></li>
                        <li class="uk-nav-divider"></li>
                        <li>
                            <button type="button" value="{{ $item->id }}" class="btn btn-default btnAjukan">Ajukan
                                Penawaran</button>
                            {{-- <a uk-toggle="target: #modal-ajukan-{{ $item->id}}"><span
                                class="uk-margin-small-right warnaBiru" uk-icon="icon: folder">
                            </span> Ajukan Penawaran</a></li> --}}
                    </ul><br>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal Alur Ajukan Penawaran-->
    <div id="ajukan" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">

            <p>Isi form dibawah ini dengan benar : </p>
            <hr>
            <form class="row g-3" method="POST" action="{{ route('PengajuanPenawaranHarga') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}" hidden>
                <div class="col-md-12">
                    <label for="inputNomorRek" class="form-label">Angka Penawaran</label>
                    <input type="text" name="harga_penawar" class="form-control" placeholder="Contoh : 500.000.000"
                        id="inputHarga" required>
                </div>
                <div class="col-md-12" uk-tooltip="Kirim dalam satu file PDF">
                    <label for="inputBerkas" class="form-label">Upload Berkas Penawaran</label>
                    <input type="file" name="berkas_penawar" class="form-control" required>
                </div>
                <p>Setelah input berkas anda akan masuk ke customer.</p>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-primary" type="submit">Submit</button>
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
                </p>
            </form>
            <br><br><br>
        </div>
    </div>
</div><br>
@endsection
{{-- <div class="modal fade" id="modal-ajukan" tabindex="-1" aria-labelledby="ubahModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">ubah Alamat</h4>
        </div>
        <div class="modal-body">
            <div class=" main-content-area">
                <div class="wrap-address-billing">
                    <form action="" method="post" name="frm-billing">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="" hidden>
                        <div>
                        <p class="row-in-form">
                            <label for="fname">Nama Lengkap<span>*</span></label>
                            <input type="text" name="name" id="name" required>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div> --}}
@section('js')
<script>
    $(document).ready(function () {
        $(document).on('click', '.btnAjukan', function () {
            var data_id = $(this).val();
            var modal = UIkit.modal("#ajukan");
            modal.show();
            // $('#ajukan').modal('show');
            $.ajax({
                type: "GET",
                url: "/dataPenawaran/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#id').val(data_id);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#inputHarga').maskMoney({
            prefix: 'Rp. ',
            thousands: '.',
            decimal: ',',
            precision: 0
        });
    });
</script>
@endsection