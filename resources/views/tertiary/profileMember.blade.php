@extends('layout/master')
@section('tittle', 'Profile')
@section('content')

    <div class="abu ">
        <div class="namacus ">
            <div class="blugra uk-padding-large  uk-margin-small-top uk-padding-remove-bottom uk-margin-remove-top ">
                <div class="container">
                    <div class="row d-flex justify-content-center justify-content-sm-start">
                        <div class="col-md-2 col-6">
                            <div class="uk-width-auto">
                                <label for="gantiprof" class="uk-inline">
                                    <img class="uk-comment-avatar  uk-border-circle uk-width-1-1 uk-border-circle uk-background-cover uk-height-small uk-width-small"
                                        src="../member/foto_diri/{{ $dataMember->foto_diri }}" width="80" height="80"
                                        alt="">
                                </label>
                            </div>
                            <div class="row uk-margin-top justify-content-center">
                                <div class="col-lg-3 col-sm-3 col-md-3 col-4 marginminkanan">
                                    <img class="uk-border-circle uk-width-1-1@s uk-width-1-2"
                                        src="{{ asset('asset/img/aktif.svg') }}" alt="">
                                </div>
                                <div class="col-sm-8 col-md-8 col-8">
                                    @if ($dataMember->status == 1)
                                        <h4 uk-tooltip="Hubungi Kontak Kami Jika Status Anda Dibekukan"
                                            class="puteh marginsikit">Status: Aktif</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-12  namacus">
                            <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
                                <h1 class=" uk-margin-remove puteh uk-text-center uk-text-left@s"><a class="uk-link-reset"
                                        href="#">{{ $dataMember->user->name }}</a></h1>
                            </div>
                            <div class="row justify-content-center justify-content-sm-start uk-margin-small-top">
                                <div class="col-3   ">
                                    <a href="" class="puteh roboto">
                                        <h4 class="puteh">{{ $dataMember->keahlian }}</h4>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="puteh roboto">
                                        <h4 class="puteh">{{ $dataMember->wilayah->name }}</h4>
                                    </a>
                                </div>
                                <div class="row uk-margin-small-top ju">
                                    <div class="col-md-12">
                                        <p class="roboto puteh">Biodata Member : </p>
                                        <ul>
                                            <li class="roboto puteh">Deskripsi : {{ $dataMember->deskripsi_diri }}</li>
                                            <li class="roboto puteh">Pendidikan Terakhir :
                                                {{ $dataMember->pendidikan_terakhir }}</li>
                                            <li class="roboto puteh">Harga Jasa : {{ $dataMember->harga_jasa }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 col-12 uk-margin-top uk-margin-remove-top@s">
                                        <div class="row  uk-margin-bottom">
                                            <div class="col-sm-4 col-12">
                                                <a class="puteh uk-text-bold uk-box-shadow-medium" href="#sertifikat"
                                                    uk-toggle>
                                                    <button
                                                        class="tombolmem2 uk-margin-bottom uk-text-regular uk-width-1-1  uk-button roundey">
                                                        Lihat Sertifikat
                                                    </button>
                                                </a>
                                                <div id="sertifikat" class="uk-flex-top" uk-modal>
                                                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                                                        <button class="uk-modal-close-outside" type="button"
                                                            uk-close></button>
                                                        <img src="/member/sertifikat_keterampilan/{{ $dataMember->sertifikat_keterampilan }}"
                                                            width="1800" height="1200" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 col-12  ">
                                                @if ($dataMember->telah_terima_orderan == 1)
                                                    <button
                                                        class=" tombolmem uk-margin-bottom uk-height-1-2 uk-width-1-1 uk-button roboto uk-text-regular roundey"
                                                        style="font-size: .6825rem;">
                                                        Sedang Menerima Pengerjaan Proyek
                                                    </button>
                                                @else
                                                    <a class="puteh uk-text-bold href=" editBiodata">
                                                        <button
                                                            class=" tombolmem uk-margin-bottom uk-height-1-2 uk-width-1-1 uk-button roboto uk-text-regular roundey">
                                                            Tambahkan ke Proyek
                                                        </button>
                                                        <div uk-dropdown>
                                                            <ul class="uk-nav uk-dropdown-nav">
                                                                <li class="uk-active">
                                                                    <a href="#">Pilih Proyek</a>
                                                                </li>
                                                                @foreach ($dataProyekJasa as $item)
                                                                    <form action="{{ route('tambahMemberKeProyek') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <li>
                                                                            <input type="hidden"
                                                                                value="{{ $item->id }}"
                                                                                name="id_proyek_jasa">
                                                                            <input type="hidden"
                                                                                value="{{ $dataMember->id_user }}"
                                                                                name="id_user_jasa">
                                                                            <button type="submit"
                                                                                class="btn btn-default">{{ $item->nama_proyek }}</button>
                                                                        </li>
                                                                    </form>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                @endif
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-12  ">
                                                <a class="puteh uk-text-bold  uk-box-shadow-medium" href="editBiodata">
                                                    <button
                                                        class=" uk-utton gregra uk-height-1-2 uk-magin-bottom uk-width-1-1 uk-button roboto uk-text-regular roundey">
                                                        Hubungi CS
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-sm-12 uk-background-default uk-margin-bottom roundey uk-margin-right uk-box-shadow-large">
                            <div class="container">
                                <div class="row mt-4">
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <h4 class="uk-text-bold">Harga Jasa Senilai:</h4>
                                        </div>
                                        <div class="row">
                                            <h1 class="roboto">{{ $dataMember->harga_jasa }}</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 justify-content-center">
                                        <img class="uk-width-1-2 uk-align-center namacus"
                                            src="{{ asset('asset/img/money.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <h2>Galeri</h2>
                                    </div>
                                </div>
                                <div class="row uk-margin-bottom uk-margin-top uk-h3">
                                    @foreach ($galeriMember as $item)
                                        <div class="col-sm-4 col-6 uk-margin-bottom">
                                            <div class="uk-inline">
                                                <div class=uk-grid uk-lightbox="animation: slide">
                                                    <div class="uk-card">
                                                        <a class="uk-inline" href="../member/gambar/{{ $item->gambar }}"
                                                            data-caption="Caption 1">
                                                            <img class="uk-background-cover uk-hover gambarcard roundet"
                                                                src="../member/gambar/{{ $item->gambar }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- <div class="row">
                                <div class="col-sm-6 col-6">
                                    <h2>Lihat Jasa Lainnya</h2>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <a href="" class="float-end">
                                        <h4>Lihat ainnya</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row mt-4 mb-4">
                                <div class="col-md-4">
                                    <div class="card shadow h-100">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40"
                                                        src="{{ asset('asset/img/avatar.png') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Nama Tukang</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top">Tukang Listrik |
                                                        Wilayah</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt.</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="login" class=" tombol uk-button uk-width-1-1">Pesan Jasa</a>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <br><br>
    <div class="container">

        <article class="uk-comment uk-comment-primary">
            <header class="uk-comment-header">
                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-comment-avatar" src="{{ asset('asset/img/avatar.png') }}" width="80" height="80"
                            alt="">
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                href="#">{{ $dataMember->user->name }}</a></h4>
                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                            <li><a href="#">{{ $dataMember->keahlian }}</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="uk-comment-body">
                <p>Biodata Member : </p>
                <ul>
                    <li>Deskripsi : {{ $dataMember->deskripsi_diri }}</li>
                    <li>Pendidikan Terakhir : {{ $dataMember->pendidikan_terakhir }}</li>
                    <li>Harga Jasa : {{ $dataMember->harga_jasa }}</li>
                </ul>
            </div>
        </article>

        <div class="container">
            <hr>
            @if ($dataMember->telah_terima_orderan == 1)
            <strong>Sedang Menerima Pengerjaan Proyek</strong>
            @else
            <button class="uk-button uk-button-default" type="button">Tambahkan Ke Proyek</button>
            <div uk-dropdown>
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-active"><a href="#">Pilih Proyek</a></li>
                    @foreach ($dataProyekJasa as $item)
                    <form action="{{ route('tambahMemberKeProyek') }}" method="POST">
                        @csrf
                        <li>
                            <input type="hidden" value="{{ $item->id }}" name="id_proyek_jasa">
                            <input type="hidden" value="{{ $dataMember->id_user }}" name="id_user_jasa">
                            <button type="submit" class="btn btn-default">{{ $item->nama_proyek }}</button>
                        </li>
                    </form>
                    @endforeach
                </ul>
            </div>
            @endif
            <p></p>

            <a class="btn btn-outline-primary" href="#sertifikat" uk-toggle>Lihat Sertifikat Keahlian</a>
            <div id="sertifikat" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                    <button class="uk-modal-close-outside" type="button" uk-close></button>
                    <img src="/member/sertifikat_keterampilan/{{ $dataMember->sertifikat_keterampilan }}" width="1800"
                        height="1200" alt="">
                </div>
            </div>

            <a class="btn btn-outline-warning" href="https://wa.me/6289619715773" role="button">Hubungi CS</a>
            <br>
            <h1 class="uk-heading-line uk-text-center fw-bold"><span>Galeri Member</span></h1>
            <hr>

            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider="center: true"
                uk-slider="autoplay: true">

                <div class="container">
                    <div class="row row-cols-2 row-cols-md-4 g-4">
                        @foreach ($galeriMember as $item)

                        <div class="col">
                            <div class="card h-100">
                                <img src="../member/gambar/{{ $item->gambar }}" class="card-img-top" alt="...">
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>

        </div>

        <br><br>
        <div class="container">
            <h1 class="uk-heading-line uk-text-center fw-bold"><span>Lihat Lainnya</span></h1> --}}

        {{-- <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($dataMember as $dataMembers)
        
        <div class="col">
        <div class="card shadow h-100">
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('asset/img/avatar.png') }}">
        </div>
        <div class="uk-width-expand">
            <h3 class="uk-card-title uk-margin-remove-bottom">{{ $dataMembers->user->name }}</h3>
            <p class="uk-text-meta uk-margin-remove-top">{{ $dataMembers->keahlian }} |
                {{ $dataMembers->wilayah->name }}</p>
        </div>
    </div>
</div>
<div class="uk-card-body">
    <p>{{ $dataMembers->deskripsi_diri }}</p>
</div>
<div class="uk-card-footer">
    <a href="{{ route('profileMember',$dataMembers->id_user) }}" class="uk-button uk-button-text">Pesan Jasa</a>
</div>
</div>
</div>

@endforeach
</div> 

</div>
</div>
</div><br> --}}

    @endsection
