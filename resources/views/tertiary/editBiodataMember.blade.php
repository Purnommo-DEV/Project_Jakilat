
@extends('layout/master')


@section('tittle', 'Edit Biodata Member')


@section('content')

<div class="container">
<br>
    <h3 class="text-center">Biodata Anda</h3>
    <p class="text-center">Jika Ingin Ubah Data Dapat Langsung Pada Form Dibawah</p>
    <hr>

    <form class="row g-3" action="{{route('updateBiodataMember',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ Auth::user()->email }}" required>
          <span class ="text-danger">@error('email') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Biarkan Kosong jika tidak ingin Mengubah">
          <span class ="text-danger">@error('password') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6">
          <label for="inputNamapemilik" class="form-label">Nama Lengkap</label>
          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" id="inputNamapemilik" required>
          <span class ="text-danger">@error('name') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6">
          <label for="inputPendidikan" class="form-label">Pendidikan Terakhir</label>
          <input name="pendidikan_terakhir" type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" value="{{ $dataMember->pendidikan_terakhir }}" id="inputPendidikan" placeholder="Contoh : D3 Teknik Mesin" required>
          <span class ="text-danger">@error('pendidikan_terakhir') {{$message}} @enderror</span>
        </div>
      
        <div class="col-12">
          <p>Pilih Kategori</p>
          <select name="keahlian" class="form-select @error('keahlian') is-invalid @enderror" value="{{ $dataMember->keahlian }}" aria-label="Default select example" required>
            <option selected>Masukkan Kategori Keahlian</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
      
          <span class ="text-danger">@error('keahlian') {{$message}} @enderror</span>
          <br>
          <select name="wilayah_id" class="form-control wilayah @error('wilayah') is-invalid @enderror" value="{{ old('wilayah') }}" aria-label="Default select example" required>
            <option selected>Masukkan Kategori Wilayah</option>
            @foreach ($kota as $item)  
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
          <span class ="text-danger">@error('wilayah') {{$message}} @enderror</span>
          </div>
      
        <div class="col-12">
          <label for="inputAddress" class="form-label">Alamat </label>
          <textarea name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="inputAddress" placeholder="Masukkan Alamat Terbaru" required>{{ $dataMember->alamat }}</textarea>
          <span class ="text-danger">@error('alamat') {{$message}} @enderror</span>
        </div>
      
        <div class="form-floating">
          <textarea name="deskripsi_diri" class="form-control @error('deskripsi_diri') is-invalid @enderror" placeholder="Masukkan text disini" id="floatingTextarea2" style="height: 100px">{{ $dataMember->deskripsi_diri }}</textarea>
          <label for="floatingTextarea2">Deskripsikan Diri Anda</label>
          <span class ="text-danger">@error('deskripsi_diri') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6">
          <label for="inputNomor" class="form-label">Nomor HP/WA</label>
          <input name="nomor_hp" type="number" class="form-control @error('nomor_hp') is-invalid @enderror" value="{{ $dataMember->nomor_hp }}" id="inputNomor" required>
          <span class ="text-danger">@error('nomor_hp') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6" uk-tooltip="Pastikan Gambar Terlihat Jelas">
          <label for="inputKtp" class="form-label">Upload KTP</label>
          <input name="ktp" type="file" value="{{ old('ktp') }}" class="form-control @error('ktp') is-invalid @enderror" value="{{ $dataMember->ktp }}" id="inputKtp">
          <span class ="text-danger">@error('ktp') {{$message}} @enderror</span>
        </div>
        
        <div class="col-md-6" uk-tooltip="Upload File Dalam Stu PDF">
          <label for="inputPersyaratan" class="form-label">Upload Berkas dan Persyaratan</label>
          <input name="berkas_persyaratan" type="file" class="form-control @error('berkas_persyaratan') is-invalid @enderror" value="{{ $dataMember->berkas_persyaratan }}" id="inputPersyaratan">
          <span class ="text-danger">@error('berkas_persyaratan') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6" uk-tooltip="Upload File Dalam Stu PDF">
          <label for="inputKeterampilan" class="form-label">Upload Sertifikat Keterampilan</label>
          <input name="sertifikat_keterampilan" type="file" class="form-control @error('sertifikat_keterampilan') is-invalid @enderror" value="{{ $dataMember->sertifikat_keterampilan }}" id="inputKeterampilan">
          <span class ="text-danger">@error('sertifikat_keterampilan') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6" uk-tooltip="Upload File Dalam Stu PDF">
          <label for="inputRekomendasi" class="form-label">Upload Surat Rekomendasi</label>
          <input name="rekomendasi" type="file" class="form-control @error('rekomendasi') is-invalid @enderror" value="{{ $dataMember->rekomendasi }}" id="inputRekomendasi">
          <span class ="text-danger">@error('rekomendasi') {{$message}} @enderror</span>
        </div>
      
        <div class="col-md-6" uk-tooltip="Upload Foto Dengan Jelas Untuk Avatar">
          <label for="inputFoto" class="form-label">Upload Foto Diri</label>
          <input name="foto_diri" type="file" class="form-control @error('foto_diri') is-invalid @enderror" value="{{ $dataMember->foto_diri }}" id="inputFoto">
          <span class ="text-danger">@error('foto_diri') {{$message}} @enderror</span>
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
        <p>Kami akan membutuhkan waktu 5-7 hari untuk memastikan data yang anda masukkan benar, kami akan segera menghubungi anda.</p>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit Keseluruhan Data</button>
        </div>
      </form>
    </div>


    
</div>
</div>
</div><br>

@endsection
@section('js')
    <script>
      $(document).ready(function() {
          $('.wilayah').select2();
      });
    </script>
@endsection