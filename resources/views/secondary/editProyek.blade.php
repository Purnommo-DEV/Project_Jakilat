@extends('layout/master')


@section('tittle', 'Edit Proyek')



@section('content')

    {{-- <br><br>
VERSI 1
<div class="container">

  <!-- Form -->
  <div class="text-center">
    <h1 class="fw-bold">Lihat Detail Status Proyek</h1>
    <p>Pastikan Data Sudah Benar</p>
  </div>

  <form action="{{ route('updateProyekPilihJasa', $detailProyek->id) }}" class="row g-3" method="POST">
@csrf
<div class="col-md-12">
  <label for="inputNama" class="form-label">Nama Proyek</label>
  <input type="text" class="form-control" placeholder="Pembangunan Jalan" id="inputNama"
    value="{{ $detailProyek->nama_proyek }}" required>
</div>
<div class="col-12">
  <label for="inputAddress" class="form-label">Alamat Proyek</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Merdeka Barat"
    value="{{ $detailProyek->alamat_proyek }}" required>
</div>
<div class="col-12">
  <div>
    <h4>Jasa Yang Anda Butuhkan</h4>
    <ul class="uk-list uk-list-disc">
      @foreach ($jasaPilihan as $item)
      <li>
        <input type="hidden" name="id_user_jasa[]" value="{{ $item->id_user_jasa }}">
        <a href="{{ route('profileMember', $item->user->id) }}"> {{ $item->user->name }} |
          {{ $item->userDetail->keahlian }} </a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<a type="button" href="{{ route('deskripsi') }}" class="btn btn-outline-warning">Cari Jasa/Tukang</a>
<div class="col-12">
  <p>Status Proyek Anda :</p>
  <input class="uk-input uk-form-controls" type="text" value="Aktif" disabled>
</div>
<p>Mohon untuk validasi proyek telah rampung jika proyek sudah selesai dibangun agar pekerja dapat kembali menerima
  orderan.</p>
<div class="col-12">
  <button type="submit" class="btn btn-primary">Proyek Telah Rampung</button>
</div>

</form>
</div> --}}


    <div class="abu">

        <!-- Form -->
        <div class="blugra uk-padding-large  ">
            <div class="container">
                <div class="text-left ">
                    <h1 class="fw-bold puteh">Tambahkan Proyek Pilih Jasa/Tukang</h1>

                </div>
            </div>
        </div>

        <div class="container namahed">
            <div class="row">
                <div class="col-md-8 me-5">
                    <div class="row uk-background-default px-3 roundey uk-box-shadow-large">
                        <div class="container ">
                            <div class="row mt-5 ">
                                <h2 class="roboto itam">Isi Data Dibawah Dengan benar</h2>
                            </div>
                            <form class="row g-3 uk-margin-small-top uk-margin-large-bottom">
                                <div class="col-md-12">
                                    <label for="inputNama" class="form-label">Nama Proyek</label>
                                    <input type="text" class="form-control" placeholder="Pembangunan Jalan"
                                        id="inputNama" value="{{ $detailProyek->nama_proyek }}" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Alamat Proyek</label>
                                    <textarea class="uk-textarea" rows="5" id="inputAddress" placeholder="Jl.Merdeka barat"
                                        value="{{ $detailProyek->alamat_proyek }}" required>{{ $detailProyek->alamat_proyek }}
              </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row uk-background-default px-3 roundey uk-box-shadow-large">
                        <div class="container ">
                            <div class="row mt-5 ">
                                <div class="col-sm-8 col-6">
                                    <h2 class="Roboto">Jasa Yang Dibutuhkan</h2>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <a class="puteh uk-text-bold float-end" href="{{ route('deskripsi') }}" uk-toggle>
                                        <button class="tombolk uk-button roundey uk-text-left">
                                            <img class="ikontom" src="{{ asset('asset/img/cari.svg') }}" alt="">
                                            Cari Jasa
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <form class="row g-3 uk-margin-small-top uk-margin-large-bottom"
                                action="{{ route('updateProyekPilihJasa', $detailProyek->id) }}" class="row g-3"
                                method="POST">
                                @csrf
                                @foreach ($jasaPilihan as $item)
                                    <input type="hidden" name="id_user_jasa[]" value="{{ $item->id_user_jasa }}">
                                    <div class="row px-3 mt-5 mb-3">
                                        <div class="col-md-2 col-3">
                                            <img class="uk-comment-avatar  roundet   uk-width-small"
                                                src="../member/foto_diri/{{ $item->userDetail->foto_diri }}" width="80"
                                                height="92" alt="">
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <a href="{{ route('profileMember', $item->user->id) }}">
                                                <div class="row ">
                                                    <h4 class="textabu">{{ $item->user->name }} |
                                                        {{ $item->userDetail->keahlian }}</h4>
                                                </div>
                                                <div class="row">
                                                    <h4 class="uk-text-bold itan namacus">
                                                        {{ $item->userDetail->harga_jasa }}</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-1 col-2">
                                            <a href="#" class="warnaMerah delete" uk-tooltip="Hapus"
                                                data-id="{{ $item->id }}">
                                                <img class="ikontom" src="{{ asset('asset/img/sampah.svg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <hr class="abu uk-height-large uk-margin-top">
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-3 uk-box-shadow-large uk-height-1-1 uk-background-default roundey ps-3 mb-5">
                    <div class="row mt-5">
                        <h4 class="roboto itam uk-text-bold">Lihat Status</h4>
                    </div>
                    <div class="col-12">
                        <p class="textabu">Status Proyek Anda :</p>
                        <input uk-tooltip="Status Proyek Anda Akan Draf hingga semua sudah terlengkapi."
                            class="uk-input uk-form-controls" type="text" value="Aktif" disabled>
                        <p>Mohon untuk validasi proyek telah rampung jika proyek sudah selesai dibangun agar pekerja dapat
                            kembali
                            menerima
                            orderan.</p>
                        <div class="col-12">
                            <button type="submit" class="uk-button tombol uk-width-4-4 mb-4">Proyek Telah Rampung</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.delete').click(function() {
                var data_id = $(this).attr('data-id');
                Swal.fire({
                        title: "Yakin ?",
                        text: "Menghapus Jasa ?",
                        icon: "warning",
                        // buttons: true,
                        // showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Oke",
                        cancelButtonText: "Batal",
                        cancelButtonColor: '#d33',
                        dangerMode: true,
                    })
                    .then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = "/hapusJasaPilihan/" + data_id;
                        }
                        // else if (result.isDenied) {
                        //     Swal.fire('Changes are not saved', '', 'info')
                        // }
                    })
            });
        });
    </script>
@endsection
