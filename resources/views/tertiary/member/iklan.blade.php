<div class="tab-pane fade" id="pills-iklan" role="tabpanel" aria-labelledby="pills-iklan-tab">
    <div class="uk-margin-top uk-margin-bottom container">
        @if (!$pengajuanIklan == NULL)
        <div class="row">
            <ul uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">Nama Bank</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanIklan->nama_bank }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Nomor Rekening</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanIklan->nomor_rekening }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Bukti Transfer Pembayaran</a>
                    <div class="uk-accordion-content">
                        <img class="uk-background-cover uk-hover gambarcard roundet" src="../public/member/bukti_bayarIklan/{{ $pengajuanIklan->bukti_bayar }}" alt="">
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Tanggal Pengajuan Iklan</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanIklan->created_at }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Status Konfirmasi</a>
                    <div class="uk-accordion-content">
                        @if($pengajuanIklan->status_konfirmasi == 0)
                            <button class="uk-button-small uk-button-danger">Belum Di Konfirmasi</button>
                        @else
                            <button class="uk-button-small uk-button-primary">Telah Di Kokonfirmasi</button>
                        @endif
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Tanggal Konfirmasi</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanIklan->updated_at }}</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Tanggal Kedaluarsa</a>
                    <div class="uk-accordion-content">
                        <p>{{ $pengajuanIklan->expire_date }}</p>
                    </div>
                </li>
            </ul>
        </div>
        @else
        <div class="row">
            Belum ada Pengajuan Iklan
        </div>
        @endif
    </div>
</div>