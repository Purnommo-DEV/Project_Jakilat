@extends('layout.master')
@section('tittle', 'Membership')
@section('content')

    <div class="abu">
        <!-- Form -->
        <section id="hero" class="hero blugra namacus uk-padding-large uk-padding-remove-bottom">
            <div class="container uk-padding-remove-left">
                <div class="row">
                    <div class="col-lg-5 col-6  ">
                        <img src="{{ asset('asset/img/gabung.png') }} " class="uk-width-1-2@s  uk-width-1-1 ms-lg-5"
                            alt="">
                    </div>
                    <div class="col-lg-6 col-6">
                        <h1 class="fw-bold uk-text-left uk-margin-top uk-margin-bottom uk-width-1-1 gabungh puteh mtop">Mari
                            Gabung
                            dan Jadi Mitra Jakilat</h1>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="uk-background-default roundey uk-padding-large">
            <div class="container">

                <p class="itam uk-text-bold">Isi data dibawah dengan benar</p>
                <form class="row g-3" action="{{ route('saveMember') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" value="{{ old('email') }}" required>
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" value="{{ old('password') }}" required>
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="inputNamapemilik" class="form-label">Nama Lengkap</label>
                        <input name="name" type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('name') }}" id="inputNamapemilik" required>
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="inputPendidikan" class="form-label">Pendidikan Terakhir</label>
                        <input name="pendidikan_terakhir" type="text"
                            class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                            value="{{ old('pendidikan_terakhir') }}" id="inputPendidikan"
                            placeholder="Contoh : D3 Teknik Mesin" required>
                        <span class="text-danger">
                            @error('pendidikan_terakhir')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <p>Pilih Kategori Keahlian</p>
                        <select name="keahlian" class="form-select @error('keahlian') is-invalid @enderror"
                            value="{{ old('keahlian') }}" aria-label="Default select example" required>
                            <option selected>Masukkan Kategori Keahlian</option>
                            @foreach ($keahlian as $keahlians)
                                <option value="{{ $keahlians->id }}">{{ $keahlians->keahlian }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('keahlian')
                                {{ $message }}
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <p>Pilih Kategori Wilayah</p>
                        <select name="wilayah_id" class="form-control wilayah @error('wilayah') is-invalid @enderror"
                            value="{{ old('wilayah') }}" aria-label="Default select example" required>
                            <option selected>Masukkan Kategori Wilayah</option>
                            @foreach ($kota as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('wilayah')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Alamat </label>
                        <textarea name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="inputAddress"
                            placeholder="Masukkan Alamat Terbaru" required>{{ old('alamat') }}</textarea>
                        <span class="text-danger">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="inputNomor" class="form-label">Nomor HP/WA</label>
                        <input name="nomor_hp" type="number" class="form-control @error('nomor_hp') is-invalid @enderror"
                            value="{{ old('nomor_hp') }}" id="inputNomor" required>
                        <span class="text-danger">
                            @error('nomor_hp')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating">
                        <textarea name="deskripsi_diri" class="form-control @error('deskripsi_diri') is-invalid @enderror"
                            placeholder="Masukkan text disini" id="floatingTextarea2" style="height: 100px">{{ old('deskripsi_diri') }}</textarea>
                        <label for="floatingTextarea2">Deskripsikan Diri Anda</label>
                        <span class="text-danger">
                            @error('deskripsi_diri')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-md-6" uk-tooltip="Pastikan Berkas Terlihat Jelas">
                        <label for="inputKtp" class="form-label">Upload KTP</label>
                        <div class="uk-upload-box">
                            <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                <p id="error-messages"></p>
                            </div>
                            <div class="drop__zone uk-placeholder uk-text-center">
                                <span uk-icon="icon: cloud-upload"></span>
                                <div uk-form-custom>
                                    <input name="ktp" type="file" value="{{ old('ktp') }}"
                                        class="form-control @error('ktp') is-invalid @enderror"
                                        value="{{ old('ktp') }}" id="inputKtp"
                                        accept="image/png, image/jpeg, application/pdf" required>
                                    <span class="uk-link">Pilih Berkas</span>
                                </div>
                                <ul id="preview"
                                    class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                    uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6" uk-tooltip="Pastikan Berkas Terlihat Jelas">
                        <label for="inputKtp" class="form-label">Upload Berkas dan Persyaratan</label>
                        <div class="uk-upload-box">
                            <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                <p id="error-messages"></p>
                            </div>
                            <div class="drop__zone uk-placeholder uk-text-center">
                                <span uk-icon="icon: cloud-upload"></span>
                                <div uk-form-custom>
                                    <input name="berkas_persyaratan" type="file"
                                        class="form-control @error('berkas_persyaratan') is-invalid @enderror"
                                        value="{{ old('berkas_persyaratan') }}" id="inputPersyaratan"
                                        accept="image/png, image/jpeg, application/pdf" required>
                                    <span class="uk-link">Pilih Berkas</span>
                                </div>
                                <ul id="preview"
                                    class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                    uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" uk-tooltip="Pastikan Berkas Terlihat Jelas">
                        <label for="inputKtp" class="form-label">Upload Sertifikat Keterampilan</label>
                        <div class="uk-upload-box">
                            <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                <p id="error-messages"></p>
                            </div>
                            <div class="drop__zone uk-placeholder uk-text-center">
                                <span uk-icon="icon: cloud-upload"></span>
                                <div uk-form-custom>
                                    <input name="sertifikat_keterampilan" type="file"
                                        class="form-control @error('sertifikat_keterampilan') is-invalid @enderror"
                                        value="{{ old('sertifikat_keterampilan') }}" id="inputKeterampilan"
                                        accept="image/png, image/jpeg, application/pdf" required>
                                    <span class="uk-link">Pilih Berkas</span>
                                </div>
                                <ul id="preview"
                                    class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                    uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" uk-tooltip="Pastikan Berkas Terlihat Jelas">
                        <label for="inputKtp" class="form-label">Upload Surat Rekomendasi</label>
                        <div class="uk-upload-box">
                            <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                <p id="error-messages"></p>
                            </div>
                            <div class="drop__zone uk-placeholder uk-text-center">
                                <span uk-icon="icon: cloud-upload"></span>
                                <div uk-form-custom>
                                    <input name="rekomendasi" type="file"
                                        class="form-control @error('rekomendasi') is-invalid @enderror"
                                        value="{{ old('rekomendasi') }}" id="inputRekomendasi"
                                        accept="image/png, image/jpeg, application/pdf" required>
                                    <span class="uk-link">Pilih Berkas</span>
                                </div>
                                <ul id="preview"
                                    class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                    uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6" uk-tooltip="Pastikan Berkas Terlihat Jelas">
                        <label for="inputKtp" class="form-label">Upload Foto Diri</label>
                        <div class="uk-upload-box">
                            <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                <p id="error-messages"></p>
                            </div>
                            <div class="drop__zone uk-placeholder uk-text-center">
                                <span uk-icon="icon: cloud-upload"></span>
                                <div uk-form-custom>
                                    <input name="foto_diri" type="file"
                                        class="form-control @error('foto_diri') is-invalid @enderror"
                                        value="{{ old('foto_diri') }}" id="inputFoto"
                                        accept="image/png, image/jpeg, application/pdf" required>
                                    <span class="uk-link">Pilih Berkas</span>
                                </div>
                                <ul id="preview"
                                    class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                    uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                                aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan ketentuan</a> yang
                                tersedia.
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                Centang kotak untuk dapat lanjut ....
                            </div>
                        </div>
                    </div>
                    <p>Kami akan membutuhkan waktu 5-7 hari untuk memastikan data yang anda masukkan benar, kami akan segera
                        menghubungi
                        anda.</p>
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
        $(document).ready(function() {
            $('.wilayah').select2();
        });
    </script>
@endsection
