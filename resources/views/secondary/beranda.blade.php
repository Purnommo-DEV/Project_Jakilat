@extends('layout/master')
@section('tittle', 'Beranda')
@section('content')

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
    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{ Auth::user()->name }}</a></h4>
    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li uk-tooltip="Hubungi Kontak Kami Jika Status Anda Dibekukan"><a href="#">Status : Aktif</a>
        </li>
        <li><a href="{{ route('editBiodata',Auth::user()->id) }}">Edit Biodata</a></li>
    </ul>
</div>
</div>
</header>
</article>

<div class="container">
    <hr>
    <div class="uk-card uk-card-default uk-card-body ">
        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
            <li class="uk-active"><a href="#">Tindakan</a></li>
            <li class="uk-parent">
                <a href="#">Penjelasan</a>
                <ul class="uk-nav-sub">
                    <li><a href="#" uk-toggle="target: #modal-jasa">Alur Proyek Pilih Jasa/Tukang</a></li>
                    <li><a href="#" uk-toggle="target: #modal-pengajuan">Alur Proyek Pengajuan Harga</a></li>
                    <li><a href="#" uk-toggle="target: #modal-status">Penjelasan Status Anda dan Proyek</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Tambah Proyek</a>
                <ul class="uk-nav-sub">
                    <li><a href="tambahProyek">Proyek Pilih Jasa/Tukang</a></li>
                    <li><a href="tambahProyekPengajuan">Proyek Pengajuan Harga </a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li class="uk-nav-header">Lainnya</li>

            <li><a href="deskripsi"><span class="uk-margin-small-right warnaBiru" uk-icon="icon: search"></span>
                    Lihat Jasa Tersedia</a></li>
            <li><a href="buktiBayar"><span class="uk-margin-small-right warnaBiru" uk-icon="icon: cloud-upload"></span>
                    Upload Bukti Pembayaran</a></li>
            <li><a href="https://wa.me/6289619715773"><span class="uk-margin-small-right warnaBiru"
                        uk-icon="icon: receiver"></span>Hubungi CS</a></li>
        </ul>
    </div>
    <br>
    <h3 class="text-center">Proyek Anda</h3>
    <hr>
    <p> Proyek Pilih Jasa/Tukang</p>

    <table class="uk-table">
        <thead>
            <tr>
                <th>Nama Proyek</th>
                <th>Status</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyekJasa as $item)
            <tr>
                <td>{{ $item->nama_proyek }}</td>
                <td>{{ $item->status }}</td>
                <td uk-tooltip="Tindakan Lihat tidak akan bisa dilakukan jika proyek berstatus selesai.">
                    <a href="{{ route('editProyek',$item->id) }}"> Lihat </a></td>
            </tr>
            @endforeach
            <!-- Akhir dari contoh -->
        </tbody>
    </table>
    <br>
    <p> Proyek Pengajuan Harga</p>

    <table class="uk-table">
        <thead>
            <tr>
                <th>Nama Proyek</th>
                <th>Penawaran</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penawaranHarga as $item)
            <tr>
                <td>{{ $item->nama_proyek }}</td>
                <td><a href="{{ route('detailProyekPengajuan',$item->id) }}" class="warnaHijau" uk-icon="folder"
                        uk-tooltip="Lihat Detail"></a></td>
                <td>
                    <a href="#" uk-icon="trash" class="warnaMerah delete" uk-tooltip="Hapus"
                        penawaran-id="{{$item->id}}">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div><br>


<!-- Modal Alur Proyek Pilih Jasa/Tukang -->
<div id="modal-jasa" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">

        <p>Berikut adalah alur memesan jasa kontruksi/tukang kami : </p>
        <ul>
            <li>Tambah Proyek yang akan dikerjakan.</li>
            <li>Lihat Jasa Tersedia untuk menambahkan jasa kotruksi/tukang pilihan anda kedalam proyek tersebut.</li>
            <li>Jika dirasa sudah lengkap silahkan tekan submit proyek.</li>
            <li>Tim Jakilat akan me-review dan menghubungi tukang pilihan anda proses paling lambat 3x24 jam.</li>
            <li>Jika jasa/tukang yang anda pilih berhalangan maka anda dapat memilih kembali pada pilihan lihat jasa
                tersedia pada menu lainnya..</li>
            <li>Melakukan pembayaran biaya admin dan pengurusan berkas kepada PT. Bara Karya Sarana sebesar Rp. 10.000-,
                kemudian upload pada menu Upload Bukti Pembayaran.</li>
            <li>Pembayaran akan di proses oleh TIM 1x24 jam pada hari kerja.</li>
            <li>Jika ACC maka proyek anda siap untuk dikerjakan.</li>
            <li>Mohon validasi Proyek Telah Rampung jika proyek telah selesai dikerjakan, jika terdapat keluhan kami
                akan menghubungi, jika 3x24 jam tidak terdapat tanggapan maka kami akan mengubah status tanpa
                perberitahuan lebih lanjut.</li>
        </ul>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
        </p>
        <br><br><br>
    </div>
</div>

<!-- Modal Alur Proyek pengajuan harga -->
<div id="modal-pengajuan" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">

        <p>Berikut adalah alur proyek pengajuan harga : </p>
        <ul>
            <li>Tambah Proyek yang akan dikerjakan.</li>
            <li>Masukkan detail pada form yang telah disediakan.</li>
            <li>Pada upload berkas, silahkan masukkan dokumen pendukung, foto, ataupun lain sebagainya dalam satu PDF.
            </li>
            <li>Form tidak dapat diedit, jika anda merasa salah input, maka anda dapat hapus dan input ulang form.</li>
            <li>Jika dirasa sudah sesuai maka lakukan pembayaran biaya admin dan pengurusan berkas kepada PT. Bara Karya
                Sarana sebesar Rp. 10.000-, kemudian upload pada menu Upload Bukti Pembayaran</li>
            <li>Tim Jakilat akan me-review selama 1x24 jam pada hari kerja dan mulai mem-posting pengajuan anda selama 1
                bulan.</li>
            <li>Anda dapat melihat siapa saja yang melakukan pengajuan penawaran pada menu PENAWARAN pada proyek
                pengajuan harga.</li>
            <li>Anda dapat menghubungi secara langsung pemilik penawaran yang melakukan pengajuan penawaran.</li>
            <li>Jika dalam 1 bulan tidak terdapat pengajuan penawaran atau tidak meperoleh hasil yang memuaskan,
                silahkan hubungi CS untuk meminta perpanjangan waktu.</li>
        </ul>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
        </p>
        <br><br><br>
    </div>
</div>

<!-- Modal Status -->
<div id="modal-status" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">

        <p>Penjelasan terhadap Status Anda : </p>
        <ul>
            <li>AKTIF : Anda berhasil mendaftar dan telah disetujui oleh kami untuk dapat membuat proyek.</li>
            <li>Dibekukan : Terdapat masalah terhadap profile anda, anda harus menghubingi Customer Support.</li>

            <p> Penjelasan terhadap Status Proyek Anda : </p>
            <li>Draf : Proyek anda sedang di review oleh TIM kami.</li>
            <li>Menunggu Pembayaran : Silahkan untuk melakukan pembayaran dan upload bukti pembayaran.</li>
            <li>Aktif : Proyek anda sudah/sedang dikerjakan.</li>
            <li>Selesai : Proyek anda telah rampung.</li>
        </ul>

        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
        </p>
        <br><br><br>
    </div>
</div> --}}

    <div class="abu pt-md-5">
        <div class="member">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 uk-margin-right blugra py-5 px-4 roundey">
                        <div class="row justify-content-center">
                            <div class="uk-width-auto">
                                <label for="gantiprof" class="uk-inline">
                                    <img class="uk-comment-avatar uk-border-circle uk-background-cover uk-height-small uk-width-small"
                                        src="{{ asset('customer/foto_diri/' . $data_customer->foto_diri) }}" width="80"
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
                                                                action="{{ route('ubahFotoDiriCustomer', Auth::user()->id) }}"
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
                        </div>
                        <div class="row ">
                            <h3 class="namamem uk-text-center puteh">{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="row uk-margin-top  uk-margin-bottom">
                            <div class="col-sm-12 col-12"> <a class="puteh uk-text-bold uk-box-shadow-medium"
                                    href="#buktibayar" uk-toggle><button
                                        class="tombolmem2 uk-margin-bottom uk-text-medium uk-width-1-1  uk-button roundey">
                                        Bukti Pembayaran </button></a></div>
                            {{-- modal buktibayar --}}
                            @include('secondary.customer.pembayaran')
                            {{-- akhir modal bukti bayar --}}
                        </div>
                    </div>
                    <div class="col-md-8  ">
                        <div class="row  uk-background-default uk-padding-large-left roundey">
                            <ul class="nav nav-pills uk-margin-left mb-3 uk-flex-left@s uk-flex-center uk-margin-top"
                                id="pills-tab" role="tablist">
                                <li class="nav-item uk-border-rounded " role="presentation">
                                    <button class="nav-link tab active roboto itam" id="pills-home-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Proyek</button>
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
                                    <button class="nav-link roboto itam" id="pills-penjelasan-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-penjelasan" type="button" role="tab"
                                        aria-controls="pills-penjelasan" aria-selected="false">Penjelasan</button>
                                </li>
                            </ul>
                        </div>

                        <div class="row uk-margin-top px-3 uk-background-default roundey">
                            <div class="container">
                                <div class="tab-content" id="pills-tabContent">
                                    @include('secondary.customer.proyek')
                                    @include('secondary.customer.profile')
                                    @include('secondary.customer.contact')
                                    @include('secondary.customer.penjelasan')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
    </div>


@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.delete').click(function() {
                var penawaran_id = $(this).attr('penawaran-id');
                var proyek_penawaran = $(this).attr('penawaran');
                Swal.fire({
                        title: "Yakin ?",
                        text: "Menghapus Data Proyek : " + proyek_penawaran + " ?",
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
                            window.location = "/hapusProyekPengajuan/" + penawaran_id;
                        }
                        // else if (result.isDenied) {
                        //     Swal.fire('Changes are not saved', '', 'info')
                        // }
                    })
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.wilayah').select2();
        });
    </script>

@endsection
