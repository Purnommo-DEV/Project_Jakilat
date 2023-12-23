@extends('layout/master')
@section('tittle', 'Portal')
@section('content')


    <div class="abu">
        <section id="hero"
            class="hero uk-padding-large uk-margin-large-bottom uk-flex uk-flex-center uk-flex-middle uk-background-cover "
            style="background-image: url(asset/img/jumbotron.svg);">
            <div class="container uk-padding-remove-left ">
                <div class="row">
                    <div class="col-lg-5 col-1"></div>
                    <div class="col-lg-6 col-10 uk-background-default uk-padding-large uk-padding-remove-vertical roundey">
                        <h2
                            class="uk-text-left uk-margin-bottom textcenter uk-text-center uk-text-left@m uk-margin-medium-top removelineheight itam">
                            Cari jasa Secepat Kilat? Hanya di Jakilat
                        </h2>
                        <h4
                            class=" itam uk-text-left uk-margin-remove-top uk-text-center uk-text-left@m textcenter .uk-visible@s">
                            Selamat datang di portal JAKILAT, silahkan pilih menu yang anda inginkan
                        </h4>
                        <a href="" class="uk-align-center uk-align-left@m  uk-text-center uk-text-left@m">
                            <button class="uk-button  blugra tombol grebat">
                                Daftar Segera
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="portal" class="portal  uk-position-z-index  uk-position-relative  ">
            <div class=" roundey blugra uk-padding-large ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6 uk-margin-bottom">
                            <a href="{{ url('berandaUtama') }}">
                                <div class=" pugra roundey uk-card uk-card-hover uk-card-body">
                                    <img src="{{ asset('asset/img/proyek2.svg') }}"
                                        class="icon uk-align-center uk-margin-small-bottom" alt="">
                                    <h3 class="uk-text-center uk-margin-remove-top itam">Cari Proyek</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 uk-margin-bottom">
                            <a href="{{ url('gabungMember') }}">
                                <div class=" pugra roundey uk-card uk-card-hover uk-card-body">
                                    <img src="{{ asset('asset/img/member.svg') }}"
                                        class="icon uk-align-center uk-margin-small-bottom" alt="">
                                    <h3 class="uk-text-center uk-margin-remove-top itam">Gabung Member</h3>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-6 uk-margin-bottom">
                            <a href="{{ url('tentangKami') }}">
                                <div class=" pugra roundey uk-card uk-card-hover uk-card-body">
                                    <img src="{{ asset('asset/img/tentangkami.svg') }}"
                                        class="icon uk-align-center uk-margin-small-bottom" alt="">
                                    <h3 class="uk-text-center uk-margin-remove-top itam">Tentang Kami</h3>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-6 uk-margin-bottom">
                            <a href="{{ url('ketentuan') }}">
                                <div class=" pugra roundey uk-card uk-card-hover uk-card-body">
                                    <img src="{{ asset('asset/img/faq.svg') }}"
                                        class="icon uk-align-center uk-margin-small-bottom" alt="">
                                    <h3 class="uk-text-center uk-margin-remove-top itam">Policy Privacy</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="jasa" class="jasa  uk-margin-small-top  ">
            <div class="roundey uk-background-default uk-padding-large">
                <div class="container">

                    {{-- carousel --}}
                    <div class="row uk-margin-bottom">
                        <div class="col-lg-6 col-6">
                            <h2 class="itam uk-text-left">Jasa Tersedia</h2>
                        </div>
                        <div class="col-lg-6 col-6">
                            <a href="">
                                <h4 class="itam uk-text-right">Lihat Selengkapnya></h4>
                            </a>
                        </div>
                    </div>
                    <div uk-slider>
                        <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
                                @foreach ($dataMember as $dataMembers)
                                    @if ($dataMembers->status == 1 && $dataMembers->siap_terima_order == 1 && $dataMembers->telah_terima_orderan == 0)
                                        <li>
                                            <div class="uk-panel">
                                                {{-- card  --}}
                                                <div class="col">
                                                    <div class="card shadow h-100">
                                                        <div class="uk-card-header">
                                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                <div class="uk-width-auto">
                                                                    <img class="uk-border-circle" width="40"
                                                                        height="40"
                                                                        src="{{ asset('member/foto_diri/' . $dataMembers->foto_diri) }}">
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <h3 class="uk-card-title uk-margin-remove-bottom">
                                                                        {{ $dataMembers->user->name }}
                                                                    </h3>
                                                                    <p class="uk-text-meta uk-margin-remove-top">
                                                                        {{ $dataMembers->relasi_keahlian->keahlian }} |
                                                                        {{ $dataMembers->alamat }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-card-body" style="padding: 0px 40px;">
                                                            <p>
                                                                {!! kata(
                                                                    $dataMembers->deskripsi_diri,
                                                                    $limit = 30,
                                                                    $end = ' ...
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    more',
                                                                ) !!}
                                                            </p>
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
                                                {{-- akhir card --}}
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                    </div>
                    {{-- akhir carousel --}}
                </div>
            </div>
        </section>

        <section id="Proyek" class="Proyek">
            <div class="uk-padding-large uk-background-default roundey uk-margin-small-top">
                <div class="container">
                    <div class="row uk-margin-bottom">
                        <div class="col-lg-6 col-6">
                            <h2 class="itam uk-text-left">Proyek Tersedia</h2>
                        </div>
                        <div class="col-lg-6 col-6">
                            <a href="">
                                <h4 class="itam uk-text-right">Lihat Selengkapnya></h4>
                            </a>
                        </div>
                    </div>
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
                                                                            {!! kata(
                                                                                $item->deskripsi,
                                                                                $limit = 30,
                                                                                $end = ' ...
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                more',
                                                                            ) !!}
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
                                                                        <table
                                                                            class="uk-table uk-table-small uk-table-divider">
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
                                                                {{-- <a href="#">
                                                            @foreach ($pengajuanHarga as $pengajuanHargas)
                                                            @if ($item->id == $pengajuanHargas->id_proyek_penawaran)
                                                                <span class="uk-margin-small-right warnaBiru" uk-icon="icon: tag"></span>
                                                                Harga Tertinggi : {{ $pengajuanHargas->harga_penawar}}
                                                        @endif
                                                        @endforeach
                                                        </a> --}}
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
                </div>
            </div>
        </section>
        <section id="hero2" class="hero2">
            <div class="blugra uk-margin-small-top norepeat uk-padding-large@s  uk-height-large  uk-flex uk-flex-center uk-flex-middle  uk-background-contain"
                style="background-image: url(/public/asset/img/bacj.png) ; background-repeat:no-repeat;" uk-img>
                <div class="container">
                    <div class="row uk-margin-bottom">
                        <h1 class="puteh uk-text-center">Partner</h1>
                        <hr class="puteh uk-width-1-4 uk-align-center namacus hr  uk-text-bold">
                    </div>
                    <div uk-slider>
                        <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">
                            <ul class="uk-slider-items justi uk-child-width-1-4 uk-child-width-3-3@m uk-grid">
                                <li>
                                    <div class="uk-panel">
                                        <div class="col">
                                            <img class="gambarpartner uk-align-center"
                                                src="{{ asset('asset/img/jakilat2.png') }}" alt="">
                                        </div>
                                    </div>
                                </li>
                                <!-- Hapus dari sini -->
                                <li>
                                    <div class=" uk-panel">
                                        <div class="col">
                                            <img class="gambarpartner uk-align-center"
                                                src="{{ asset('asset/img/jakilat2.png') }}"" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-panel">
                                        <div class="col">
                                            <img class="gambarpartner uk-align-center"
                                                src="{{ asset('asset/img/jakilat2.png') }}" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a class="uk-position-center-left uk-position-small bluegra tombol uk-padding-small puteh"
                                href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small bluegra tombol uk-padding-small puteh"
                                href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="ajukan" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">

            <p>Isi form dibawah ini dengan benar : </p>
            <hr>
            <form class="row g-3" method="POST" action="{{ route('PengajuanPenawaranHarga') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}" hidden>
                <div class="col-md-12">
                    <label for="inputNomorRek" class="form-label">Angka Penawaran</label>
                    <input type="text" name="harga_penawar" class="form-control" placeholder="Contoh : 500.000.000"
                        id="inputHarga" required>
                </div>
                <div class="col-md-12" uk-tooltip="Kirim dalam satu file PDF">
                    <div class="uk-upload-box">
                        <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                            <p id="error-messages"></p>
                        </div>
                        <div class="drop__zone uk-placeholder uk-text-center">
                            <span uk-icon="icon: cloud-upload"></span>
                            <div uk-form-custom>
                                <input type="file" name="berkas_penawar" class="form-control"
                                    accept="image/png, image/jpeg, application/pdf" required>
                                <span class="uk-link">Upload Berkas Penawaran</span>
                            </div>
                            <ul id="preview"
                                class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                        </div>
                    </div>
                    <p>Setelah input berkas anda akan masuk ke customer.</p>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-primary" type="submit">Submit</button>
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
                    </p>
            </form>
            <br><br><br>
        </div>
    </div>
    {{-- <img src="{{ asset('asset/img/jakilat.png') }}" class="gambarlogo2 rounded mx-auto d-block gambarlogo" alt="...">



<div class="container">

    <p class="text-center"> Selamat datang di portal JAKILAT, silahkan pilih menu yang anda inginkan</p>

    <div class="uk-child-width-1-2@s uk-grid-match text-center" uk-grid>
        <div>
            <a href="berandaUtama">
                <div class="uk-card uk-card-hover uk-card-body shadow">
                    <h4 class="uk-card-title">
                        <p uk-icon="cart"></p>
                        Proyek
                    </h4>
                    <p>Ayo Cari Atau Ajukan Jasa Yang Anda Butuhkan</p>
                </div>
            </a>
        </div>
        <div>
            <a href="tentangKami">
                <div class="uk-card uk-card-hover uk-card-body shadow">
                    <h4 class="uk-card-title">
                        <p uk-icon="info"></p>
                        TENTANG KAMI
                    </h4>
                    <p>Yuk Cek Tentang Kami</p>
                </div>
            </a>
        </div>
        <div>
            <a href="gabungMember">
                <div class="uk-card uk-card-hover uk-card-body shadow">
                    <h4 class="uk-card-title">
                        <p uk-icon="users"></p>
                        GABUNG MEMBER
                    </h4>
                    <p>Gabung Member Raih Pemasukan Lebih Dari Usaha Kamu</p>
                </div>
            </a>
        </div>
        <div>
            <a href="ketentuan">
                <div class="uk-card uk-card-hover uk-card-body shadow">
                    <h4 class="uk-card-title">
                        <p uk-icon="bell"></p>
                        PRIVACY POLICY
                    </h4>
                    <p>Kami Selalu Menjaga Anda</p>
                </div>
            </a>
        </div>
    </div>
</div> --}}

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btnAjukan', function() {
                var data_id = $(this).val();
                var modal = UIkit.modal("#ajukan");
                modal.show();
                // $('#ajukan').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/dataPenawaran/" + data_id,
                    success: function(response) {
                        //console.log(response.data.status);
                        $('#id').val(data_id);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#inputHarga').maskMoney({
                // prefix: '.',
                thousands: '.',
                decimal: ',',
                precision: 0
            });
        });
    </script>
@endsection
