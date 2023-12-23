<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="uk-margin-top uk-margin-bottom container">
        <div class="row">
            <div class="col-sm-6 col-6">
                <h2 class="Roboto">Profil Kamu</h2>
            </div>
            <div class="col-sm-6 col-6">
                <a class="puteh uk-text-bold float-end" href="#editmember" uk-toggle><button
                        class="tombolk uk-button roundey uk-text-left"> <img class="ikontom"
                            src="{{ asset('asset/img/pencil_solid.svg') }}" alt="">Edit
                    </button></a>
            </div>
            <div id="editmember" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h2 class="uk-modal-title">Biodata Anda</h2>
                    <p>Jika Ingin Ubah Data Dapat Langsung Pada Form Dibawah</p>
                    <form class="row g-3" action="{{ route('updateBiodataMember', Auth::user()->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input name="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                value="{{ Auth::user()->email }}" required>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Password</label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Biarkan Kosong jika tidak ingin Mengubah">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="inputNamapemilik" class="form-label">Nama
                                Lengkap</label>
                            <input name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ Auth::user()->name }}" id="inputNamapemilik" required>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPendidikan" class="form-label">Pendidikan
                                Terakhir</label>
                            <input name="pendidikan_terakhir" type="text"
                                class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                                value="{{ $dataMember->pendidikan_terakhir }}" id="inputPendidikan"
                                placeholder="Contoh : D3 Teknik Mesin" required>
                            <span class="text-danger">
                                @error('pendidikan_terakhir')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <p>Kategori Keahlian</p>
                            <select name="keahlian" class="form-select @error('keahlian') is-invalid @enderror"
                                value="{{ $dataMember->keahlian }}" aria-label="Default select example" required>
                                <option selected>Masukkan Kategori Keahlian</option>
                                @foreach ($keahlian as $keahlians)
                                    <option value="{{ $keahlians->id }}">{{ $keahlians->keahlian }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <p>Kategori Wilayah</p>
                            <select name="wilayah_id"
                                class="form-control wilayah @error('wilayah_id') is-invalid @enderror"
                                value="{{ old('wilayah_id') }}" aria-label="Default select example" required>
                                @foreach ($kota as $item)
                                    @if (old('wilayah_id', $dataMember->wilayah_id) == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
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
                                placeholder="Jl. Sui Raya Dalam Komplek BDN No.2, Kubu Raya, Kalimantan Barat" required>{{ $dataMember->alamat }}</textarea>
                            <span class="text-danger">
                                @error('alamat')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="inputNomor" class="form-label">Nomor HP/WA</label>
                            <input name="nomor_hp" type="number"
                                class="form-control @error('nomor_hp') is-invalid @enderror"
                                value="{{ $dataMember->nomor_hp }}" id="inputNomor" required>
                            <span class="text-danger">
                                @error('nomor_hp')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating">
                            <textarea name="deskripsi_diri" class="form-control @error('deskripsi_diri') is-invalid @enderror"
                                placeholder="Masukkan text disini" id="floatingTextarea2" style="height: 100px">{{ $dataMember->deskripsi_diri }}</textarea>
                            <label for="floatingTextarea2">Deskripsikan Diri Anda</label>
                            <span class="text-danger">
                                @error('deskripsi_diri')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6" uk-tooltip="Pastikan Gambar Terlihat Jelas">
                            <div class="uk-upload-box">
                                <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                    <p id="error-messages"></p>
                                </div>
                                <div class="drop__zone uk-placeholder uk-text-center">
                                    <span uk-icon="icon: cloud-upload"></span>
                                    <div uk-form-custom>
                                        <input name="ktp" type="file"
                                            value="{{ old('ktp') }} class="form-control" id="inputFoto"
                                            accept="image/png, image/jpeg, application/pdf" required>
                                        <span class="uk-link" style="font-size: 70%;">Upload KTP</span>
                                    </div>
                                    <ul id="preview"
                                        class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                        uk-grid
                                        uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" uk-tooltip="Upload File Dalam Stu PDF">
                            <div class="uk-upload-box">
                                <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                    <p id="error-messages"></p>
                                </div>
                                <div class="drop__zone uk-placeholder uk-text-center">
                                    <span uk-icon="icon: cloud-upload"></span>
                                    <div uk-form-custom>
                                        <input name="berkas_persyaratan" type="file"
                                            value="{{ old('ktp') }} class="form-control" id="inputFoto"
                                            accept="image/png, image/jpeg, application/pdf" required>
                                        <span class="uk-link" style="font-size: 70%;">Upload Berkas dan
                                            Persyaratan</span>
                                    </div>
                                    <ul id="preview"
                                        class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                        uk-grid
                                        uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" uk-tooltip="Upload File Dalam Stu PDF">

                            <div class="uk-upload-box">
                                <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                    <p id="error-messages"></p>
                                </div>
                                <div class="drop__zone uk-placeholder uk-text-center">
                                    <span uk-icon="icon: cloud-upload"></span>
                                    <div uk-form-custom>
                                        <input name="sertifikat_keterampilan" type="file"
                                            value="{{ old('ktp') }} class="form-control" id="inputFoto"
                                            accept="image/png, image/jpeg, application/pdf" required>
                                        <span class="uk-link" style="font-size: 70%;">Upload Sertifikat
                                            Keterampilan</span>
                                    </div>
                                    <ul id="preview"
                                        class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                        uk-grid
                                        uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6" uk-tooltip="Upload File Dalam Stu PDF">
                            <div class="uk-upload-box">
                                <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                                    <p id="error-messages"></p>
                                </div>
                                <div class="drop__zone uk-placeholder uk-text-center">
                                    <span uk-icon="icon: cloud-upload"></span>
                                    <div uk-form-custom>
                                        <input name="rekomendasi" type="file"
                                            value="{{ old('ktp') }} class="form-control" id="inputFoto"
                                            accept="image/png, image/jpeg, application/pdf" required>
                                        <span class="uk-link" style="font-size: 70%;">Upload Surat
                                            Rekomendasi</span>
                                    </div>
                                    <ul id="preview"
                                        class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                        uk-grid
                                        uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input is-invalid" type="checkbox" value=""
                                    id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                <label class="form-check-label" for="invalidCheck3">
                                    Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan ketentuan</a>
                                    yang tersedia.
                                </label>
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    Centang kotak untuk dapat lanjut ....
                                </div>
                            </div>
                        </div>
                        <p>Kami akan membutuhkan waktu 5-7 hari untuk memastikan data yang anda
                            masukkan benar, kami akan segera menghubungi anda.</p>


                        <p class="uk-text-right">
                            <button class="uk-button uk-button-danger uk-modal-close uk-margin-right roundet"
                                type="button">Cancel</button>
                            <button class="uk-button tombolblu uk-width-1-4 roundet " type="submit">Save</button>
                        </p>
                    </form>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row uk-margin-left uk-margin-top">
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Nama</li>
                <li class="roboto itam">{{ Auth::user()->name }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Email</li>
                <li class="roboto itam">{{ Auth::user()->email }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Password</li>
                <li class="roboto itam">****** </li>
            </ul>

            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Pendidikan Terakhir</li>
                <li class="roboto itam">{{ $dataMember->pendidikan_terakhir }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Kategori Keahlian</li>
                <li class="roboto itam">{{ $dataMember->keahlian }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Wilayah</li>
                <li class="roboto itam">{{ $dataMember->wilayah->name }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">No Hp</li>
                <li class="roboto itam">{{ $dataMember->nomor_hp }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Alamat</li>
                <li class="roboto itam">{{ $dataMember->alamat }}
                </li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Deskripsi Diri</li>
                <li class="roboto itam">{{ $dataMember->deskripsi_diri }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">KTP</li>
                <li class="roboto itam">
                    <a href="../public/member/ktp/{{ $dataMember->ktp }}" download>
                        <button class="uk-button tombolblu uk-text-left">
                            <span class="uk-margin-small-right " uk-icon="download"></span>
                            Unduh Berkas
                        </button>
                    </a>
                </li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Berkas dan Persyaratan</li>
                <li class="roboto itam">
                    <a href="../public/member/berkas_persyaratan/{{ $dataMember->berkas_persyaratan }}" download>
                        <button class="uk-button tombolblu uk-text-left">
                            <span class="uk-margin-small-right " uk-icon="download"></span>
                            Unduh Berkas
                        </button>
                    </a>
                </li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Sertifikat Keterampilan</li>
                <li class="roboto itam">
                    <a href="../public/member/sertifikat_keterampilan/{{ $dataMember->sertifikat_keterampilan }}"
                        download>
                        <button class="uk-button tombolblu uk-text-left">
                            <span class="uk-margin-small-right " uk-icon="download"></span>
                            Unduh Berkas
                        </button>
                    </a>
                </li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Surat Rekomendasi</li>
                <li class="roboto itam">
                    <a href="../public/member/rekomendasi/{{ $dataMember->rekomendasi }}" download>
                        <button class="uk-button tombolblu uk-text-left">
                            <span class="uk-margin-small-right " uk-icon="download"></span>
                            Unduh Berkas
                        </button>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
