<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="uk-margin-large-top uk-margin-bottom container">
        <div class="row">
            <div class="col-sm-6 col-6">
                <h2 class="Roboto">Profil Kamu</h2>
            </div>
            <div class="col-sm-6 col-6">
                <a class="puteh uk-text-bold float-end" href="#m_customer-{{ Auth::user()->id }}" uk-toggle><button
                        class="tombolk uk-button roundey uk-text-left">
                        <img class="ikontom" src="{{ asset('asset/img/pencil_solid.svg') }}" alt="">Edit
                    </button></a>
            </div>

            <div id="m_customer-{{ Auth::user()->id }}" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h2 class="uk-modal-title">Biodata Anda</h2>
                    <p>Jika Ingin Ubah Data Dapat Langsung Pada Form Dibawah</p>
                    <form action="{{ route('updateBiodataCostumer', Auth::user()->id) }}" class="row g-3"
                        method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input name="email" value="{{ Auth::user()->email }}" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="{{ Auth::user()->email }}" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="inputPassword4"
                                placeholder="Kosongkan Jika Tidak Ingin Mengubah" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputNamapemilik" class="form-label">Nama
                                Lengkap</label>
                            <input type="text" value="{{ Auth::user()->name }}" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{ Auth::user()->name }}" id="inputName" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputNomor" class="form-label">Nomor
                                HP/WA</label>
                            <input type="number" name="nomor_hp"
                                class="form-control @error('nomor_hp') is-invalid @enderror" placeholder="0896xxxx"
                                value="{{ $data_customer->nomor_hp }}" id="inputNomor" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputNamapemilik" class="form-label">Pilih Wilayah</label>
                            <select name="wilayah_id"
                                class="form-control wilayah @error('wilayah_id') is-invalid @enderror"
                                value="{{ old('wilayah_id') }}" aria-label="Default select example" required>
                                @foreach ($kota as $item)
                                    @if (old('wilayah_id', $data_customer->wilayah_id) == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <span class ="text-danger">
                                @error('wilayah')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat </label>
                            <input type="text" name="alamat" value="{{ $data_customer->alamat }}"
                                class="form-control" id="inputAddress" placeholder="Jl. Ahmad Yani, Gg. Merdeka"
                                required>
                        </div>


                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input is-invalid" type="checkbox" value=""
                                    id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                <label class="form-check-label" for="invalidCheck3">
                                    Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan ketentuan</a>
                                    yang
                                    tersedia.
                                </label>
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    Centang kotak untuk dapat lanjut ....
                                </div>
                            </div>
                        </div>
                        <p>Kami akan membutuhkan waktu 5-7 hari untuk memastikan data
                            yang anda masukkan benar, kami akan segera menghubungi anda.
                        </p>

                        <p class="uk-text-right">
                            <button class="uk-button uk-button-danger uk-modal-close uk-margin-right roundet"
                                type="button">Cancel</button>
                            <button type="submit" class="uk-button tombolblu uk-width-1-4 roundet "
                                type="button">Save</button>
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
                <li class="roboto itam">******</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Wilayah</li>
                <li class="roboto itam">{{ $data_customer->wilayah->name }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">No Hp</li>
                <li class="roboto itam">{{ $data_customer->nomor_hp }}</li>
            </ul>
            <ul class="uk-subnav-divider">
                <li class="roboto textabu uk-text-bold pb-2">Alamat</li>
                <li class="roboto itam">{{ $data_customer->alamat }}</li>
            </ul>

        </div>
    </div>
</div>
