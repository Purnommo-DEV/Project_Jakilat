@extends('layout/master')
@section('tittle', 'Beranda Utama')
@section('content')

    {{-- <br><br>

<div class="container">
<div class="card shadow">
    <div class="card-body">
        <p class="text-center">Filter Pencarian Anda</p>
<form class="uk-grid-small" uk-grid>
    <div class="uk-width-1-2@s">
            <select class="uk-select">
                <option>Pilih Kategori</option>
                <option>Option 02</option>
            </select>
    </div>
    <div class="uk-width-1-2@s">
            <select class="uk-select">
                <option>Pilih Wilayah</option>
                <option>Option 02</option>
            </select>
    </div>
</form><p></p>
<div class="text-center">
<button type="button" class="btn btn-info">Submit</button>
</div>
</div>
</div>
</div>

<br>

<div class="container">
<div class="d-grid gap-2">
<a href="login" type="button" class="btn btn-outline-primary">Lihat Lebih Banyak </a>
</div>
</div>

<br>

<!-- Untuk Proyek Pengajuan -->
<div class="container">
<h1 class="uk-heading-line uk-text-center fw-bold"><span>Proyek Tersedia</span></h1>
<p class="text-center" >Member Dapat Mengajukan Penawaran Pada Proyek Ini</p>
<div uk-slider>
<div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">

    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
        @foreach ($proyekPenawaran as $item)
            
        <li>
            <div class="uk-panel">
            <div class="col">
                <div class="card shadow">
                <div class="container"><br>
                <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                    <li class="uk-active"><a href="#">{{ $item->user->name }}</a></li>
<li class="uk-parent">
    <a href="#">Deskripsi Proyek</a>
    <ul class="uk-nav-sub">
        <li><a href="#">{{ $item->deskripsi }}</a></li>
    </ul>
</li>
<li class="uk-parent">
    <a href="#">File Tambahan</a>
    <ul class="uk-nav-sub">
        <li><a href="customer/berkas/{{ $item->berkas }}" download>Tekan untuk unduh</a></li>
    </ul>
</li>
<li class="uk-nav-header">Pembangunan Taman Bermain</li>
<li><a href="#"><span class="uk-margin-small-right warnaBiru" uk-icon="icon: tag"></span> Harga Tertinggi :
        {{ $item->harga_pembukaan}}</a></li>
<li><a href="#"><span class="uk-margin-small-right warnaBiru"
            uk-icon="icon: calendar"></span>{{ $item->batas_penerimaan}}</a></li>
<li><a href="#"><span class="uk-margin-small-right warnaBiru"
            uk-icon="icon: location"></span>{{ $item->lokasi_proyek}}</a></li>
<li class="uk-nav-divider"></li>
<li><a href="login"><span class="uk-margin-small-right warnaBiru" uk-icon="icon: folder"></span> Ajukan Penawaran</a>
</li>
</ul><br>
</div>
</div>
</div>
</div>
</li>

@endforeach
</ul>

<a class="uk-position-center-left uk-position-small warnaBiru" href="#" uk-slidenav-previous
    uk-slider-item="previous"></a>
<a class="uk-position-center-right uk-position-small warnaBiru" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>
</div>


<!-- Untuk Jasa/Tukang -->
<br><br>
<div class="container">
    <h1 class="uk-heading-line uk-text-center fw-bold"><span>Jasa Tersedia</span></h1>
    <p class="text-center">Customer Dapat Memilih Member Sesuai Kebutuhan Untuk Bekerja</p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($data_tukang as $data_tukangs)

        <div class="col">
            <div class="card shadow h-100">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40"
                                src="{{ asset('asset/img/avatar.png') }}">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">{{ $data_tukangs->user->name }}</h3>
                            <p class="uk-text-meta uk-margin-remove-top">{{ $data_tukangs->keahlian }} |
                                {{ $data_tukangs->wilayah }}</p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>{{ $data_tukangs->deskripsi_diri }}</p>
                </div>
                <div class="uk-card-footer">
                    <a href="login" class="uk-button uk-button-text">Pesan Jasa</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>

</div><br>
</div>
</div>
<br> --}}


    <div class="abu">
        <div class="hero">
            <div class="blugra  uk-height-medium uk-padding-large">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <h2 class="puteh">Pilih Proyek dan Jasa yang Tersedia</h2>
                        </div>
                        <div class="col-lg-6 col-6">
                            <img src="{{ asset('asset/img/hero1.svg') }}" class="uk-width-1-2@s namaher  uk-align-center"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container filter">
            <div class="card shadow uk-padding-small">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <p class="itam text-left uk-text-bold">Filter Pencarian Anda</p>
                        </div>
                    </div>
                    <form class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                            <select class="uk-select">
                                <option>Pilih Kategori</option>
                                <option>Option 02</option>
                            </select>
                        </div>
                        <div class="uk-width-1-2@s">
                            <select class="uk-select">
                                <option>Pilih Wilayah</option>
                                <option>Option 02</option>
                            </select>
                        </div>
                    </form>
                    <p></p>
                    <div class="uk-text-right">
                        <button type="button" class="btn tombol uk-width-1-1">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="d-grid gap-2">

            </div>
        </div>


        <div class="uk-background-default roundey uk-margin-small-top uk-padding-large">

            <!-- Untuk Proyek Pengajuan -->
            <div class="container ">
                <h1 class="itam uk-heading-line uk-text-center fw-bold"><span>Proyek Tersedia</span></h1>
                <p class=" itam text-center">Member Dapat Mengajukan Penawaran Pada Proyek Ini</p>
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
                            @foreach ($proyekPenawaran as $item)
                                <li>
                                    <div class="uk-panel">
                                        <div class="col">
                                            <div class="card shadow">
                                                <div class="container"><br>
                                                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>

                                                        <li class="uk-active">
                                                            <a href="#" class="uk-text-bold itam">
                                                                {{ $item->nama_proyek }}
                                                            </a>
                                                        </li>
                                                        <li class="uk-parent">
                                                            <a href="#">
                                                                <span class="uk-margin-small-right warnaBiru"
                                                                    uk-icon="icon: file-text">
                                                                </span>Deskripsi Proyek
                                                            </a>
                                                            <ul class="uk-nav-sub">
                                                                <li>
                                                                    <a href="#">
                                                                        {!! kata($item->deskripsi, $limit = 30, $end = ' ... more') !!}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="uk-parent">
                                                            <a href="../customer/berkas/{{ $item->berkas }}" download>
                                                                <span class="uk-margin-small-right warnaBiru"
                                                                    uk-icon="icon: folder"></span>
                                                                File Tambahan
                                                            </a>
                                                            <ul class="uk-nav-sub">
                                                                <li>
                                                                    <a href="../customer/berkas/{{ $item->berkas }}"
                                                                        download>
                                                                        <span class="uk-margin-small-right warnaBiru"
                                                                            uk-icon="icon: download"></span>
                                                                        Tekan untuk unduh
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="uk-nav-header">{{ $item->nama_proyek }}</li>

                                                        <li>
                                                            <a href="#modal-example" uk-toggle>lihat Daftar Harga</a>
                                                            <div id="modal-example" uk-modal>
                                                                <div class="uk-modal-dialog uk-modal-body">
                                                                    <table class="uk-table uk-table-small uk-table-divider">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Penawar</th>
                                                                                <th>Harga Penawaran</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($pengajuanHarga as $pengajuanHargas)
                                                                                @if ($item->id == $pengajuanHargas->id_proyek_penawaran)
                                                                                    <tr>
                                                                                        <td>{{ $pengajuanHargas->userPenawar->name }}
                                                                                        </td>
                                                                                        <td>{{ $pengajuanHargas->harga_penawar }}
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <a href="#">
                                                                <span class="uk-margin-small-right warnaBiru"
                                                                    uk-icon="icon: calendar"></span>
                                                                {{ $item->batas_penerimaan }}
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="uk-margin-small-right warnaBiru"
                                                                    uk-icon="icon: location"></span>
                                                                {{ $item->lokasi_proyek }}
                                                            </a>
                                                        </li>
                                                        <li class="uk-nav-divider"></li>
                                                        <div class="uk-card-footer">
                                                            @auth
                                                                <button type="button" value="{{ $item->id }}"
                                                                    class="tombol uk-button uk-width-1-1 btnAjukan">
                                                                    Ajukan Penawaran
                                                                </button>
                                                            @endauth
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
                <a href="" class="uk-center"><button
                        class="uk-button uk-align-center tombolb uk-button-large uk-margin-medium-top uk-text-bold">Lihat
                        Selengkapnya</button></a>
            </div>

        </div>


        <!-- Untuk Jasa/Tukang -->
        <br>
        <div class="uk-background-default roundey uk-padding-large  ">


            <div class="container">
                <h1 class="uk-heading-line uk-text-center fw-bold"><span>Jasa Tersedia</span></h1>
                <p class="text-center">Customer Dapat Memilih Member Sesuai Kebutuhan Untuk Bekerja</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($dataMember as $dataMembers)
                        @if ($dataMembers->status == 1 && $dataMembers->siap_terima_order == 1 && $dataMembers->telah_terima_orderan == 0)
                            <div class="col">
                                <div class="card shadow h-100">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-border-circle" width="40" height="40"
                                                    src="{{ asset('asset/img/avatar.png') }}">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">
                                                    {{ $dataMembers->user->name }}</h3>
                                                <p class="uk-text-meta uk-margin-remove-top">{{ $dataMembers->keahlian }} |
                                                    {{ $dataMembers->alamat }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <p>{!! kata($dataMembers->deskripsi_diri, $limit = 30, $end = ' ... more') !!}</p>
                                    </div>
                                    <div class="uk-card-footer">
                                        @auth
                                            <a href="{{ route('profileMember', $dataMembers->id_user) }}"
                                                class="tombol uk-button uk-width-1-1">
                                                Pesan Jasa
                                            </a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <br>
                <a href="" class="uk-center"><button
                        class="uk-button uk-align-center tombolb uk-button-large uk-margin-small-top uk-text-bold">Lihat
                        Selengkapnya</button></a>
            </div>
        </div>
        <br>

    </div>
    </div>

    </div><br>


@endsection
