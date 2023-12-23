@extends('layout/master')
@section('tittle', 'Daftar Customer')
@section('content')

<div class="abu">
  <!-- Form -->
  <section id="hero" class="hero blugra namacus uk-padding-large uk-padding-remove-bottom">
    <div class="container uk-padding-remove-left">
      <div class="row">
        <div class="col-lg-5 col-6  ">
          <img src="{{asset('asset/img/gabung.png')}} " class="uk-width-1-2@s  uk-width-1-1 ms-lg-5" alt="">
        </div>
        <div class="col-lg-6 col-6">
          <h1 class="fw-bold uk-text-left uk-margin-top uk-margin-bottom uk-width-1-1 gabungh puteh mtop">Gabung Bersama Jakilat</h1>
        </div>
      </div>
    </div>

  </section>
  <br>
  <div class="uk-background-default roundey uk-padding-large">
    <div class="container">
      <p class="itam uk-text-bold">Isi data dibawah dengan benar</p>
      <form class="row g-3" action="{{route('saveCustomer')}}" method="post">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
            value="{{ old('email') }}" required>
          <span class="text-danger">@error('email') {{$message}} @enderror</span>
        </div>

        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
            id="password" value="{{ old('password') }}" required>
          <span class="text-danger">@error('password') {{$message}} @enderror</span>
        </div>

        <div class="col-md-6">
          <label for="inputNamapemilik" class="form-label">Nama Lengkap</label>
          <input name="name" type="text" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('name') }}" id="inputNamapemilik" required>
          <span class="text-danger">@error('name') {{$message}} @enderror</span>
        </div>

        <div class="col-md-6">
          <label for="inputNomor" class="form-label">Nomor HP/WA</label>
          <input name="nomor_hp" type="number" class="form-control @error('nomor_hp') is-invalid @enderror"
            value="{{ old('nomor_hp') }}" id="inputNomor" required>
          <span class="text-danger">@error('nomor_hp') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
          <label for="inputAddress" class="form-label">Alamat </label>
          <textarea name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
            id="inputAddress" placeholder="Masukkan Alamat Terbaru" required>{{ old('alamat') }}</textarea>
          <span class="text-danger">@error('alamat') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
          <label for="inputAddress" class="form-label">Pilih Kategori Wilayah</label>
          <select name="wilayah_id" class="form-control wilayah @error('wilayah') is-invalid @enderror"
            value="{{ old('wilayah') }}" aria-label="Default select example" required>
            <option selected>Masukkan Kategori Wilayah</option>
            @foreach ($kota as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
          <span class="text-danger">@error('wilayah') {{$message}} @enderror</span>
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
        <p>Setelah mendaftar anda dapat langsung menuju halaman login kembali.</p>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit Keseluruhan Data</button>
        </div>
      </form>

    </div>
  </div>
</div>

@endsection
@section('js')
<script>
  $(document).ready(function () {
    $('.wilayah').select2();
  });
</script>
@endsection