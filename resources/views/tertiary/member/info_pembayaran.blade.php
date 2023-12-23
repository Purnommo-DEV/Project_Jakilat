<div class="tab-pane fade" id="pills-pembayaran" role="tabpanel" aria-labelledby="pills-pembayaran-tab">
    <div class="uk-margin-top uk-margin-bottom container">
        @foreach ($pembayaran as $item)
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div>
                <dl class="uk-description-list">
                    <dt>Nama Pentransfer</dt>
                    <dd>{{ $item->nama }}</dd>
                    <dt>Nama Bank</dt>
                    <dd>{{ $item->nama_bank }}</dd>
                    <dt>Nomor Rekening</dt>
                    <dd>{{ $item->nomor_rekening }}</dd>
                    <dt>Status Verifikasi</dt>
                    @if ( $item->status_konfirmasi == 0 )
                        <button class="uk-button-small uk-button-danger">Belum Di Verifikasi</button>
                    @else
                        <button class="uk-button-small uk-button-primary">Telah Di Verifikasi</button>
                    @endif
                </dl>
            </div>
            <div>{{ $item->pesan }}</div>
            <div>
                 <div class=uk-grid uk-lightbox="animation: slide">
                    <div class="uk-card">
                        <a class="uk-inline" href="../public/member/bukti_bayar/{{ $item->bukti_bayar }}" data-caption="Caption 1">
                            <img class="uk-background-cover uk-hover gambarcard roundet" src="../public/member/bukti_bayar/{{ $item->bukti_bayar }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>