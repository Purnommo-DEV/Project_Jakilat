@extends('layout/master')

@section('tittle', 'Iklan')

@section('content')

<br><br>

<div class="container">

<!-- Form -->
<div class="text-center">
    <h1 class="fw-bold">Iklankan Diri Anda</h1>
    <p>Isi data dibawah dengan benar</p>
</div>

<form class="row g-3" action="{{route('IklankanMember')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="col-md-6">
    <label for="inputNamapemilik" class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" id="inputNamapemilik" required>
  </div>
  <div class="col-md-6">
    <label for="inputNomorRek" class="form-label">Nomor Rekening</label>
    <input type="number" name="nomor_rekening" class="form-control" id="inputNomorRek" required>
  </div>
  <div class="col-md-6">
    <label for="inputNamaBank" class="form-label">Nama Bank</label>
    <input type="text" name="nama_bank" class="form-control" id="inputNamaBank" required>
  </div>
  <div class="col-md-6" uk-tooltip="Pastikan Gambar Terlihat Jelas">
    <label for="inputBukti" class="form-label">Upload Bukti Pembayaran</label>
    <input type="file" name="bukti_bayar" class="form-control" id="inputBukti" required>
  </div>
  <div class="col-12">
  <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan ketentuan</a>  yang tersedia.
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        Centang kotak untuk dapat lanjut .... 
      </div>
    </div>
  </div>
  <p>Setelah mengisi data, nama anda akan berada di antrian untuk iklan.</p>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit Keseluruhan Data</button>
  </div>
</form>
</div>

@endsection