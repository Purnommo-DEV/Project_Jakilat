@extends('layout/master')
@section('tittle', 'Beranda Member')
@section('content')

    {{-- <br><br>
<div class="container">

    <article class="uk-comment uk-comment-primary">
        <header class="uk-comment-header">
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="uk-comment-avatar" src="../public/member/foto_diri/{{$dataMember->foto_diri}}" width="80"
                        height="80" alt="">
                </div>
                <div class="uk-width-expand">
                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                            href="#">{{Auth::user()->name}}</a></h4>
                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                        <li uk-tooltip="Hubungi Kontak Kami Jika Status Anda Dibekukan">

                            <a href="#">Status :
                                @if ($dataMember->status == 1)
                                Aktif
                                @else
                                Tidak Aktif
                                @endif
                            </a></li>
                    </ul>
                </div>
            </div>
        </header>

        @if ($dataMember->telah_terima_orderan == 0)
        <div class="form-check form-switch">

            <input type="checkbox" role="switch" id="flexSwitchCheckChecked" class="form-check-input cek"
                name="siap_terima_order" value="{{$dataMember->siap_terima_order}}" data-id="{{$dataMember->id}}"
                member-id="{{$dataMember->id}}" @if ($dataMember->siap_terima_order == 1) checked @endif>

    <!-- <a href="#" class = "btn btn-danger btn-sm cek" id="siap_terima_order" name="siap_terima_order" member-id = "{{$dataMember->id}}">Hapus</a>
        -->

            <span class="custom-control-indicator"></span>
            @if ($dataMember->siap_terima_order == 1)
            <span class="form-check-label text-success text-justify cek-teks-{{$dataMember->id}}">Terima Orderan</span>
            @else
            <span class="form-check-label text-danger text-justify cek-teks-{{$dataMember->id}}">Tidak Terima
                Orderan</span>
            @endif
            <!-- <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
             <label class="form-check-label" for="flexSwitchCheckChecked">Terima Orderan </label>-->
        </div>
        <div id="tampil">
            <p>Pastikan centang anda aktif menerima orderan, mohon matikan jika anda tidak siap menerima orderan.</p>
            <p>Masukkan Harga Jasa ( nama jasa ) Anda : </p>
            <div class="uk-margin" uk-margin>
                <form action="{{ route('masukkanHarga') }}" method="post">
                    @csrf
                    <div uk-form-custom="target: true">
                        <input type="text" name="harga_jasa" id="inputHarga" placeholder="Contoh : 50.000" required>
                    </div>
                    <button class="uk-button uk-button-default" type="submit">Submit</button>
                </form>
            </div>
            <p>Harga Jasa Anda Sekarang : {{ $dataMember->harga_jasa }}</p>
        </div>
        @else
        Sedang Menerima Orderan
        @endif
    </article>

    <div class="container">
        <hr>
        <div class="uk-card uk-card-default uk-card-body ">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-active"><a href="#">Tindakan</a></li>
                <li class="uk-parent">
                    <a href="#">Penjelasan</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#" uk-toggle="target: #modal-pesanan">Alur Mendapatkan Pesanan</a></li>
                        <li><a href="#" uk-toggle="target: #modal-penawaran">Alur Mengajukan Penawaran</a></li>
                        <li><a href="#" uk-toggle="target: #modal-iklan">Alur Mengajukan Periklanan</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Cara Aktivasi Akun</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">1. Pastikan biodata anda sudah benar.</a></li>
                        <li><a href="#">2. Lakukan pembayaran biaya membership Rp. 50.000-, selama belum melakukan
                                pembayaran maka status anda dibekukan.</a></li>
                        <li><a href="#">3. Upload bukti pembayaran pada menu lainnya.</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Permintaan</a>
                    <ul>
                        <div class="uk-container uk-container-small">
                            <table class="uk-table uk-table-justify uk-table-divider">
                                <thead>
                                    <tr>
                                        <th class="uk-width-small">Nama Proyek</th>
                                        <th>Deskripsi</th>
                                        <th class="uk-width-small">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Table Data</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</td>
                                        <td><button class="uk-button uk-button-default uk-button-small"
                                                type="button">Button</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </ul>
                </li>
                <li class="uk-nav-divider"></li>
                <li class="uk-nav-header">Lainnya</li>

                <li><a href="proyekPengajuan"><span class="uk-margin-small-right warnaBiru"
                            uk-icon="icon: search"></span> Lihat Pengajuan Tersedia</a></li>
                <li><a href="{{route('editBiodataMember',Auth::user()->id)}}"><span
                            class="uk-margin-small-right warnaBiru" uk-icon="icon: user"></span> Edit Biodata</a></li>
                <li><a href="{{ route('buktiBayarMember') }}"><span class="uk-margin-small-right warnaBiru"
                            uk-icon="icon: cloud-upload"></span> Upload Bukti Pembayaran</a></li>
                <li><a href="https://wa.me/6289619715773"><span class="uk-margin-small-right warnaBiru"
                            uk-icon="icon: receiver"></span>Hubungi CS</a></li>
            </ul>
        </div>
    </div>
</div>
</div><br>

<div class="container">
    <div class="d-grid gap-2">
        <a href="{{route('Iklan')}}" type="button" class="btn btn-outline-primary"
            uk-tooltip="Iklankan diri anda untuk dapat muncul di member teratas selama 30 hari.">Iklankan Diri Anda </a>
    </div>
</div><br><br>

<!-- Tambah Gambar -->
<div class="container">
    <h2 class="text-center">Galeri Anda</h2>
    <p class="text-center">Tambahkan galeri untuk memperkuat data anda bagi custmomer</p>
    <div class="d-grid gap-2">
        <!-- Tombol Modal -->
        <button uk-toggle="target: #my-id" type="button" class="btn btn-outline-success"
            uk-tooltip="Tambahkan galeri untuk customer melihat anda.">Tambahkan galeri </button>
    </div>
</div>
</div><br>

<!-- Form Modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Tambah Gambar</h2>
        <form action="{{ route('tambahGambarMember') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="uk-margin" uk-margin>
                <div uk-form-custom="target: true">
                    <input type="file" name="gambar" id="inputFile" multiple>
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                </div>
                <button class="uk-button uk-button-default">Simpan</button>
                <button class="uk-button uk-button-default uk-modal-close" type="button">Batal</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row row-cols-2 row-cols-md-4 g-4"> --}}

    {{-- @php
    $galeri = DB::table('galeri')->where('id_user', Auth::user()->id)->get();
    $galeris = explode('|', $galeri->gambar)
@endphp

@foreach ($galeris as $item)
<div class="col">
    <div class="card h-100">
        <img src="{{ URL::to($item) }}" class="card-img-top" alt="...">
    </div>
</div>
@endforeach --}}
    {{-- @foreach ($galeris as $item)
<div class="col">
    <div class="card h-100">
        <img src="../public/member/gambar/{{ $item->gambar }}" class="card-img-top" alt="...">
    </div>
</div>
@endforeach

</div>
</div>
</div> --}}


    <!-- Modal Alur Proyek Pilih Jasa/Tukang -->
    <div id="modal-pesanan" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">

            <p>Berikut adalah alur mendapatkan pesanan : </p>
            <ul>
                <li>Pastikan data yang anda masukkan benar.</li>
                <li>Pastikan centang anda aktif menerima orderan, mohon matikan jika anda tidak siap menerima orderan.</li>
                <li>Customer akan anda memilih bedasarkan data yang anda masukkan.</li>
                <li>Data yang terlihat pada customer dapat di cek pada lihat profile</li>
                <li>Jika anda dipilih kami akan menghubungi anda.</li>
                <li>Jika ACC maka proyek anda siap untuk dikerjakan.</li>
            </ul>

            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
            </p>
            <br><br><br>
        </div>
    </div>

    <!-- Modal Alur Proyek Pilih Jasa/Tukang -->
    <div id="modal-penawaran" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">

            <p>Berikut adalah alur melakukan penawaran : </p>
            <ul>
                <li>Lihat penawaran pada Lihat Pengajuan Tersedia.</li>
                <li>Kirim berkas pengajuan anda dalam bentuk PDF lengkap dengan biodata perusahaan/pribadi anda beserta
                    nomor yang dapat dihubungi.</li>
                <li>Setelah dikirim berkas tidak dapat dihapus, silakan kirim kembali jika terjadi kesalahan.</li>
                <li>Anda akan menunggu panggilan dari customer jika berkas anda dapat diterima. </li>
                <li>Anda dapat melihat riwayat penawaran pada tabel dibawah.</li>
            </ul>

            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
            </p>
            <br><br><br>
        </div>
    </div>

    <!-- Modal Alur Periklanan -->
    <div id="modal-iklan" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">

            <p>Berikut adalah alur mengajukan periklanan: </p>
            <ul>
                <li>Tekan tombol iklankan diri anda.</li>
                <li>Lakukan pembayaran sebesar Rp. 50.000-, upload pada form iklankan diri anda.</li>
                <li>Kami akan mencatat dan melakukan iklan terhadap diri anda selama 30 hari penuh.</li>
                <li>Tombol tidak akan tersedia jika slot untuk iklan sudah penuh.</li>
            </ul>

            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
            </p>
            <br><br><br>
        </div>
    </div>







    <div class="abu ">
        <div class="namacus ">
            <div class="blugra uk-padding-large  uk-margin-small-top uk-padding-remove-bottom uk-margin-remove-top ">
                <div class="container">
                    <div class="row d-flex justify-content-center justify-content-sm-start">
                        <div class="col-md-2 col-6">
                            <div class="uk-width-auto">
                                <input type="file" id="gantiprof" class="uk-hidden">
                                <label for="gantiprof" class="uk-inline">
                                    <img class="uk-comment-avatar uk-border-circle uk-background-cover uk-height-small uk-width-small"
                                        src="{{ asset('member/foto_diri/' . $dataMember->foto_diri) }}" width="80"
                                        height="80" alt="">
                                    <div class=" uk-position-bottom-right ">
                                        <a style="border:none;" class="uk-button uk-button-default" href="#ubahFoto"
                                            uk-toggle>
                                            <img class="uk-comment-avatar  uk-border-circle uk-width-1-1"
                                                src="{{ asset('asset/img/fotoup.svg') }}" width="80" height="80"
                                                alt="">
                                        </a>
                                        <div id="ubahFoto" uk-modal>
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>


                                                <div class="uk-upload-box">
                                                    <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden"
                                                        uk-alert>
                                                        <p id="error-messages"></p>
                                                    </div>

                                                    <div class="drop__zone uk-placeholder uk-text-center">
                                                        <span uk-icon="icon: cloud-upload"></span>
                                                        <span class="uk-text-middle uk-margin-small-left">Tarik Foto Anda
                                                            dalam form ini atau</span>
                                                        <div uk-form-custom>
                                                            <form
                                                                action="{{ route('ubahFotoDiriMember', Auth::user()->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <input name="foto_diri" accept="image/png, image/jpeg"
                                                                    type="file">

                                                                <span class="uk-link">Pilih disini</span>
                                                        </div>

                                                        <ul id="preview"
                                                            class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                                            uk-grid
                                                            uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80">
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="uk-modal-footer uk-text-right">
                                                    <button class="uk-button uk-button-default uk-modal-close"
                                                        type="button">Cancel</button>
                                                    <button type="submit" class="uk-button uk-button-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    @else
                                        <h4 uk-tooltip="Hubungi Kontak Kami Jika Status Anda Dibekukan"
                                            class="puteh marginsikit">Status: Tidak Aktif</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-12  namacus">
                            <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
                                <h1 class=" uk-margin-remove puteh uk-text-center uk-text-left@s">
                                    <a class="uk-link-reset" href="#">{{ Auth::user()->name }}</a>
                                </h1>
                            </div>
                            <div class="row justify-content-center justify-content-sm-start uk-margin-small-top">
                                <div class="col-4">
                                    @if ($dataMember->telah_terima_orderan == 0)
                                        <div class="form-check form-switch">
                                            <input class="form-check-input puteh cek" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" name="siap_terima_order"
                                                value="{{ $dataMember->siap_terima_order }}" data-id="{{ $dataMember->id }}"
                                                member-id="{{ $dataMember->id }}"
                                                @if ($dataMember->siap_terima_order == 1) checked @else @endif>
                                            @if ($dataMember->siap_terima_order == 1)
                                                <span class="form-check-label puteh cek-teks-{{ $dataMember->id }}">
                                                    Terima Orderan
                                                </span>
                                            @else
                                                <span class="form-check-label puteh cek-teks-{{ $dataMember->id }}">
                                                    Tidak Terima Orderan
                                                </span>
                                            @endif
                                        </div>
                                    @else
                                        Sedang Menerima Orderan
                                    @endif
                                </div>
                            </div>
                            <div class="row uk-margin-small-top justify-content-center">
                                <div class="col-md-6">

                                    <p class="puteh uk-bold uk-width-1-1" id="tampil">
                                        Pastikan centang anda aktif menerima orderan,
                                        mohon matikan jika anda tidak siap menerima orderan.
                                    </p>
                                </div>

                                <div class="col-md-6 col-12 uk-margin-top uk-margin-remove-top@s">
                                    <div class="row  uk-margin-bottom">
                                        <div class="col-md-12 col-lg-6 col-12">
                                            <a class="puteh uk-text-bold uk-box-shadow-medium" href="#buktibayar"
                                                uk-toggle>
                                                <button
                                                    class="tombolmem2 uk-margin-bottom uk-text-regular uk-width-1-1  uk-button roundey">
                                                    Bukti Pembayaran
                                                </button>
                                            </a>
                                        </div>

                                        @include('tertiary.member.pembayaran')

                                        <div class="col-lg-6 col-md-12  col-md col-12">
                                            <a class="puteh uk-text-bold  uk-box-shadow-medium" href="#iklankan"
                                                uk-toggle>
                                                <button
                                                    class=" tombolmem uk-height-1-2 uk-width-1-1 uk-button roboto uk-text-regular roundey">
                                                    Iklankan Diri Anda
                                                </button>
                                            </a>
                                        </div>

                                        @include('tertiary.member.pengajuan_iklandiri')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <article class="uk-comment uk-margin-top ">
            <header class="uk-comment-header">
                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                   
                    <div class="uk-width-expand">
                       
                    </div>
                   
                </div>
               
            </header>
        </article> --}}
                </div>
            </div>
        </div>
        <div class="uk-background-default namacus roundey uk-box-shadow-large" id="tabpane">
            <div class="container">
                <div class="row justify-content-center">
                    <ul class="nav nav-pills mb-3 uk-flex-center uk-margin-top" id="pills-tab" role="tablist">
                        <li class="nav-item uk-border-rounded " role="presentation">
                            <button class="nav-link tab active roboto itam" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link roboto itam" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link roboto itam" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link roboto itam" id="pills-iklan-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-iklan" type="button" role="tab" aria-controls="pills-iklan"
                                aria-selected="false">Pengajuan Iklan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link roboto itam" id="pills-pengajuanHarga-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-pengajuanHarga" type="button" role="tab"
                                aria-controls="pills-pengajuanHarga" aria-selected="false">Pengajuan Harga Proyek</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link roboto itam" id="pills-proyekDikerjakan-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-proyekDikerjakan" type="button" role="tab"
                                aria-controls="pills-proyekDikerjakan" aria-selected="false">Proyek Yang
                                Dikerjakan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link roboto itam" id="pills-pembayaran-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-pembayaran" type="button" role="tab"
                                aria-controls="pills-pembayaran" aria-selected="false">Pembayaran</button>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <br>
        <div class="">
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm-8 uk-height-1-1 uk-background-default uk-margin-bottom roundey uk-margin-right uk-box-shadow-large">
                        <div class="tab-content" id="pills-tabContent">

                            @include('tertiary.member.home')
                            @include('tertiary.member.profile')
                            @include('tertiary.member.contact')
                            @include('tertiary.member.iklan')
                            @include('tertiary.member.pengajuan_harga')
                            @include('tertiary.member.proyek_dikerjakan')
                            @include('tertiary.member.info_pembayaran')

                        </div>
                    </div>
                    <div
                        class="col-sm-3 uk-height-1-1  uk-margin-bottom roundey uk-background-default uk-box-shadow-large">
                        <div class="container">
                            <h4 class="roboto textabu uk-margin-top uk-text-bold ">Penjelasan</h4>

                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title roboto uk-text-small textabu " href="#">Aktivasi
                                        Akun</a>
                                    <div class="uk-accordion-content">
                                        <p>Berikut adalah cara Aktivasi Akun : </p>
                                        <ul class="">
                                            <li>1. Pastikan biodata anda sudah benar.</li>
                                            <li>2. Lakukan pembayaran biaya membership Rp. 50.000-, selama belum melakukan
                                                pembayaran maka status anda dibekukan.</li>
                                            <li>3. Upload bukti pembayaran pada menu lainnya.</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title roboto uk-text-small textabu " href="#">Alur
                                        Pemesanan</a>
                                    <div class="uk-accordion-content">
                                        <p>Berikut adalah alur mendapatkan pesanan : </p>
                                        <ul>
                                            <li>Pastikan data yang anda masukkan benar.</li>
                                            <li>Pastikan centang anda aktif menerima orderan, mohon matikan jika anda tidak
                                                siap menerima orderan.</li>
                                            <li>Customer akan anda memilih bedasarkan data yang anda masukkan.</li>
                                            <li>Data yang terlihat pada customer dapat di cek pada lihat profile</li>
                                            <li>Jika anda dipilih kami akan menghubungi anda.</li>
                                            <li>Jika ACC maka proyek anda siap untuk dikerjakan.</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title roboto uk-text-small textabu " href="#">Alur
                                        Penawaran</a>
                                    <div class="uk-accordion-content">
                                        <p>Berikut adalah alur melakukan penawaran : </p>
                                        <ul>
                                            <li>Lihat penawaran pada Lihat Pengajuan Tersedia.</li>
                                            <li>Kirim berkas pengajuan anda dalam bentuk PDF lengkap dengan biodata
                                                perusahaan/pribadi anda beserta nomor yang dapat dihubungi.</li>
                                            <li>Setelah dikirim berkas tidak dapat dihapus, silakan kirim kembali jika
                                                terjadi kesalahan.</li>
                                            <li>Anda akan menunggu panggilan dari customer jika berkas anda dapat diterima.
                                            </li>
                                            <li>Anda dapat melihat riwayat penawaran pada tabel dibawah.</li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>
                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title roboto uk-text-small textabu " href="#">Alur
                                        Periklanan</a>
                                    <div class="uk-accordion-content">
                                        <p>Berikut adalah alur mengajukan periklanan: </p>
                                        <ul>
                                            <li>Tekan tombol iklankan diri anda.</li>
                                            <li>Lakukan pembayaran sebesar Rp. 50.000-, upload pada form iklankan diri anda.
                                            </li>
                                            <li>Kami akan mencatat dan melakukan iklan terhadap diri anda selama 30 hari
                                                penuh.</li>
                                            <li>Tombol tidak akan tersedia jika slot untuk iklan sudah penuh.</li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>
                        </div>
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
                var gambar_id = $(this).attr('gambar-id');
                Swal.fire({
                        title: "Yakin ?",
                        text: "Menghapus Gambar ?",
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
                            window.location = "/hapusGambarMember/" + gambar_id;
                        }
                        // else if (result.isDenied) {
                        //     Swal.fire('Changes are not saved', '', 'info')
                        // }
                    })
            });
        });
    </script>
    <script>
        $('.cek').change(function() {
            var val = $(this).val();
            var member_id = $(this).attr('member-id');
            console.log(member_id);
            if ($(this).is(':checked')) {
                $.get("{{ url('/terimaOrder') }}/" + member_id + '/1')
                    .done(function(data) {
                        // window.location.reload();
                        $('.cek-teks-' + member_id).html('Terima Orderan');
                        $('.cek-teks-' + member_id).addClass('text-success');
                        $('.cek-teks-' + member_id).removeClass('text-danger');
                        $('#tampil').hide();
                        $('#tampil2').hide();
                        $('#tampil3').show();
                        toastr.success('Menerima Orderan', 'Sukses', {
                            timeout: 1000
                        });
                    });
                // console.log(status);
                // console.log('diceklis');
            } else {
                $.get("{{ url('/terimaOrder') }}/" + member_id + '/0')
                    .done(function(data) {
                        // window.location.reload();
                        $('.cek-teks-' + member_id).html('Tidak Terima Orderan');
                        $('.cek-teks-' + member_id).removeClass('text-success');
                        $('.cek-teks-' + member_id).addClass('text-danger');
                        $('#tampil').show();
                        $('#tampil2').show();
                        $('#tampil3').hide();
                        $('.teks-' + member_id).html('');
                        toastr.warning('Tidak Menerima Orderan', 'Sukses', {
                            timeout: 1000
                        });
                    });
                // console.log(status);            
                // console.log('ndak diceklis');            
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#inputHarga').maskMoney({
                prefix: 'Rp. ',
                thousands: '.',
                decimal: ',',
                precision: 0
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.wilayah').select2();
        });
    </script>
@endsection
