@extends('layout/master')


@section('tittle', 'Tambah Proyek Pengajuan')


@section('content')
<div class="abu">

  <!-- Form -->
  <div class="blugra uk-padding-large roundey namacus">
    <div class="container ">
      <div class="text-center uk-margin-top">
        <h1 class="fw-bold puteh">Tambahkan Proyek Pengajuan</h1>

      </div>
    </div>
  </div>
  <br>
  <div class="uk-background-default uk-padding-large roundey">
    <p class="itam uk-text-bold">Isi data dibawah dengan benar</p>
    <form class="row g-3" action="{{ route('simpanProyekPengajuan') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="col-md-6">
        <label for="inputNama" class="form-label">Nama Proyek</label>
        <input type="text" name="nama_proyek" class="form-control" placeholder="Cukup Tiga Kata" id="inputNama"
          value="{{ old('nama_proyek') }}" required>
      </div>
      <div class="col-md-6">
        <label for="inputTanggal" class="form-label">Batas Penerimaan Penawaran</label>
        <input type="date" name="batas_penerimaan" class="form-control" id="inputTanggal"
          value="{{ old('batas_penerimaan') }}" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Lokasi Proyek</label>
        <input type="text" name="lokasi_proyek" class="form-control" id="inputAddress"
          value="{{ old('lokasi_proyek') }}" placeholder="Masukkan Alamat Proyek Dilaksanakan" required>
      </div>
      <div class="col-md-6">
        <label for="inputHarga" class="form-label">Input Harga Pembukaan</label>
        <input type="text" name="harga_pembukaan" placeholder="Contoh : 500000000" class="form-control"
          value="{{ old('harga_pembukaan') }}" id="inputHarga" required>
      </div>
      <div class="col-md-6" uk-tooltip="Pastikan Gambar Terlihat Jelas">
        <label for="inputBukti" class="form-label">Upload Berkas (jika ada)</label>
        <input type="file" name="berkas" class="form-control @error('berkas') is-invalid @enderror" id="title"
          value="{{ old('berkas') }}" id="inputBukti">
        <span class="text-danger">@error('berkas') {{$message}} @enderror</span>
      </div>
      <div class="form-floating">
        <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px" required>{{ old('deskripsi') }}</textarea>
        <label for="floatingTextarea2">Deskripsikan Proyek Anda</label>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
            aria-describedby="invalidCheck3Feedback" required>
          <label class="form-check-label" for="invalidCheck3">
            Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan ketentuan</a> yang tersedia.
          </label>
          <div id="invalidCheck3Feedback" class="invalid-feedback">
            Centang kotak untuk dapat lanjut ....
          </div>
        </div>
      </div>
      <p>Setelah data terkirim silahkan kalukan pembayaran Rp. 10.000-, dan upload bukti.</p>
      <div class="col-6">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="col-6">
        <button onclick="goBack()" class="btn btn-warning">Batal </button>
      </div>
    </form>
  </div>
</div>

@endsection
@section('js')
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