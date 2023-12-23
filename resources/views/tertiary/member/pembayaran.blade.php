<div id="buktibayar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Upload Bukti Pembayaran</h2>
        <p>Isi data dibawah dengan benar</p>
        <form class="row g-3" action="{{ route('simpanBuktiBayar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="inputNamapemilik" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="inputNamapemilik" required>
            </div>
            <div class="col-md-6">
                <label for="inputNomorRek" class="form-label">Nomor Rekening</label>
                <input type="number" name="nomor_rekening" class="form-control" id="inputNomorRek" required>
            </div>
            <div class="col-md-6">
                <label for="inputNamaBank" class="form-label">Nama Bank</label>
                <input type="text" name="nama_bank" class="form-control" id="inputNamaBank" required>
            </div>
            <div class="col-md-6">
                <label for="inputPesan" class="form-label">Pesan</label>
                <input type="text" name="pesan" class="form-control" placeholder="Masukkan tujuan pembayaran" id="inputPesan" required>
            </div>
            <div class="col-md-12" uk-tooltip="Pastikan Gambar Terlihat Jelas">

                <div class="uk-upload-box">
                    <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                        <p id="error-messages"></p>
                    </div>
                    <div class="drop__zone uk-placeholder uk-text-center">
                        <span uk-icon="icon: cloud-upload"></span>
                        <div uk-form-custom>
                            <input type="file" name="bukti_bayar" class="form-control"
                                accept="image/png, image/jpeg" required>
                            <span class="uk-link">Upload Bukti Pembayaran</span>
                        </div>
                        <ul id="preview"
                            class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                            uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan ketentuan</a> yang tersedia.
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        Centang kotak untuk dapat lanjut ....
                    </div>
                </div>
            </div>
            <p>Setelah membayar tim akan memproses 1x24 jam pada hari kerja.</p>
        
        <p class="uk-text-right">
            <button
                class="uk-button tombolblu uk-width-1-  uk-margin-bottom roundet "
                type="submit" >Submit Keseluruhan Data</button>

            <button
                class="uk-button uk-button-danger uk-width-1-1 uk-modal-close uk-margin-right roundet"
                type="button">Cancel</button>
        </p>
    </form>
        <br>
        <br>
    </div>
</div>