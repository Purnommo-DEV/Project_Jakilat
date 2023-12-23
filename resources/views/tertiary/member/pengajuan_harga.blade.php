<div class="tab-pane fade" id="pills-pengajuanHarga" role="tabpanel" aria-labelledby="pills-pengajuanHarga-tab">
    <div class="uk-margin-top uk-margin-bottom container">
        @if (!$pengajuanHarga == NULL)
        <div class="row">
            <ul uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">Sekilas Proyek</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanHarga->proyekTawaran->nama_proyek }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Alamat Proyek</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanHarga->proyekTawaran->lokasi_proyek }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Harga Yang Diajukan</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanHarga->harga_penawar }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Berkas Pengajuan</a>
                    <div class="uk-accordion-content">
                        <img class="uk-background-cover uk-hover gambarcard roundet" src="../public/member/bukti_bayarIklan/{{ $pengajuanIklan->bukti_bayar }}" alt="">
                    </div>
                </li>
            </ul>
        </div>
        @else
        <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex">
            <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; end: 50vh + 20%;" style="color: red">Peringatan</h1>
                <p uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; end: 50vh + 20%;" style="color: black">Belum Mengajukan Penawaran Harga atau Sedang dalam mengerjakan Proyek</p>
            </div>
        </div>
        @endif
    </div>
</div>