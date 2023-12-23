<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row uk-margin-top ">
        <div class="col-sm-6 col-6">
            <h2>Proyek Anda</h2>
        </div>
        <div class="col-sm-6 col-6  ">
            <a class="" href="#modal-center" uk-toggle>
                <button class="uk-button roboto tombolblu float-end">Tambah
                    Proyek</button>
            </a>
            <div id="modal-center" class="uk-flex-top" uk-modal>
                <div class="roundey uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                    <button class="uk-modal-close-default" type="button" uk-close></button>

                    <div class="container">
                        <div class="row">
                            <h2 class="itam uk-text-center roboto">Silahkan Memilih yang
                                anda butuhkan!</h2>
                        </div>
                        <div class="row uk-margin-top">
                            <div class="col-sm-6 col-12">
                                <a class="" href="tambahProyek">
                                    <button class="uk-button roboto tombolblu uk-width-1-1 uk-margin-bottom">
                                        Pilih Jasa/Tukang</button>
                                </a>
                            </div>
                            <div class="col-sm-6 col-12">
                                <a class="uk-margin-top" href="tambahProyekPengajuan">
                                    <button class="uk-button roboto tombolblu uk-width-1-1  ">
                                        Pengajuan Harga</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row uk-margin-top">
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
                            penawaran-id="{{$item->id}}" 
                            penawaran="{{$item->nama_proyek}}">
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>