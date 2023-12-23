@extends('layout/master')
@section('tittle', 'Deskripsi')
@section('content')


    <div class="abu">
        <div class="hero">
            <div class="blugra  uk-height-medium uk-padding-large">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <h2 class="puteh">Hallo {{ Auth::user()->name }} </h2>
                        </div>
                        <div class="col-lg-6 col-6">
                            <img src="{{ asset('asset/img/hero2.svg') }}" class="uk-width-1-2@s namaher  uk-align-center"
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
                        <div class="col-lg-6 col-6"> <a href="login" type="button">
                                <h4 class="itam uk-text-normal uk-text-right">Lihat Lebih Banyak ></h3>
                            </a></div>
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
                <h1 class="itam uk-heading-line uk-text-center fw-bold"><span>Member Teratas</span></h1>
                <br>
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
                            @foreach ($dataMember as $dataMembers)
                                <li>
                                    <div class="uk-panel">
                                        {{-- card  --}}
                                        <div class="col">
                                            <div class="card shadow h-100">
                                                <div class="uk-card-header">
                                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img class="uk-border-circle" width="40" height="40"
                                                                src="../member/foto_diri/{{ $dataMembers->foto_diri }}">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <h3 class="uk-card-title uk-margin-remove-bottom">
                                                                {{ $dataMembers->user->name }}</h3>
                                                            <p class="uk-text-meta uk-margin-remove-top">
                                                                {{ $dataMembers->keahlian }} | {{ $dataMembers->alamat }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card-body">
                                                    <p>{!! kata($dataMembers->deskripsi_diri, $limit = 30, $end = ' ... more') !!}</p>
                                                </div>
                                                <div class="uk-card-footer">
                                                    <a href="{{ route('profileMember', $dataMembers->id_user) }}"
                                                        class="tombol uk-button uk-width-1-1">Pesan Jasa</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- akhir card --}}
                                    </div>
                                </li>
                            @endforeach

                            <!-- Hapus dari sini -->
                            <!-- Sampai sini -->
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
            </div>
        </div>


        <!-- Untuk Jasa/Tukang -->
        <br>
        <div class="uk-background-default roundey uk-padding-large  ">


            <div class="container">
                <h1 class="uk-heading-line uk-text-center fw-bold"><span>Semua Member</span></h1>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($dataMember as $dataMembers)
                        <div class="col">
                            <div class="card shadow h-100">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" width="40" height="40"
                                                src="../member/foto_diri/{{ $dataMembers->foto_diri }}">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">
                                                {{ $dataMembers->user->name }}</h3>
                                            <p class="uk-text-meta uk-margin-remove-top">
                                                {{ $dataMembers->keahlian }} | {{ $dataMembers->alamat }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>{!! kata($dataMembers->deskripsi_diri, $limit = 30, $end = ' ... more') !!}</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a href="{{ route('profileMember', $dataMembers->id_user) }}"
                                        class="tombol uk-button uk-width-1-1">Pesan Jasa</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br>

    </div>
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
            </form>
            <p></p>
            <div class="text-center">
                <button type="button" class="btn btn-info">Submit</button>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="container">
    <h1 class="uk-heading-line uk-text-center fw-bold"><span>Member Teratas</span></h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($dataMember as $dataMembers)

        <div class="col">
            <div class="card shadow h-100">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40"
                                src="{{ asset('asset/img/avatar.png') }}">
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
                    <a href="{{ route('profileMember',$dataMembers->id_user) }}" class="uk-button uk-button-text">Pesan
                        Jasa</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>

</div><br>

<div class="container">
    <h1 class="uk-heading-line uk-text-center fw-bold"><span>Semua Member</span></h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($dataMember as $dataMembers)

        <div class="col">
            <div class="card shadow h-100">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40"
                                src="{{ asset('asset/img/avatar.png') }}">
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
                    <a href="{{ route('profileMember',$dataMembers->id_user) }}" class="uk-button uk-button-text">Pesan
                        Jasa</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div><br> --}}



@endsection
