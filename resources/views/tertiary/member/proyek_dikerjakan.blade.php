<div class="tab-pane fade" id="pills-proyekDikerjakan" role="tabpanel" aria-labelledby="pills-proyekDikerjakan-tab">
    <div class="uk-margin-top uk-margin-bottom container">
        @if (!$proyekDikerjakan == NULL)
        <div class="row">
            <ul uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">Info Proyek</a>
                    <div class="uk-accordion-content">
                        <p>{{ $proyekDikerjakan->proyekDetail->nama_proyek }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Alamat Proyek</a>
                    <div class="uk-accordion-content">
                        <p>{{ $proyekDikerjakan->proyekDetail->alamat_proyek }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Status</a>
                    <div class="uk-accordion-content">
                        <p></p>
                    </div>
                </li>
            </ul>
        </div>
        @else
            <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; end: 50vh + 20%;" style="color: red">Peringatan</h1>
                    <p uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; end: 50vh + 20%;" style="color: black">Belum dipilih untuk mengerjakan Proyek atau Telah melakukan pengajuan harga Proyek</p>
                </div>
            </div>
        @endif
    </div>
</div>