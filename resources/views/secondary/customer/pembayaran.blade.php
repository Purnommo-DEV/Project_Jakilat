<div id="buktibayar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Upload Bukti Pembayaran</h2>
        <p>Isi data dibawah dengan benar</p>
        <form class="row g-3" action="{{ route('simpanBuktiBayarCustomer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="inputNamapemilik" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="inputNamapemilik" value="{{ old('nama') }}" required>
            </div>
            <div class="col-md-6">
                <label for="inputNomorRek" class="form-label">Nomor Rekening</label>
                <input type="number" name="nomor_rekening" class="form-control" id="inputNomorRek" value="{{ old('nomor_rekening') }}" required>
            </div>
            <div class="col-md-6">
                <label for="inputNamaBank" class="form-label">Nama Bank</label>
                <input type="text" name="nama_bank" class="form-control" id="inputNamaBank" value="{{ old('nama_bank') }}" required>
            </div>
            <div class="col-md-6">
                <label for="inputPesan" class="form-label">Pesan</label>
                <input type="text" name="pesan" class="form-control" placeholder="Masukkan tujuan pembayaran" id="inputPesan" value="{{ old('pesan') }}" required>
            </div>
            <div class="col-md-12" uk-tooltip="Pastikan Gambar Terlihat Jelas">
                <label for="inputBukti" class="form-label">Upload Bukti Pembayaran</label>
                <input type="file" name="bukti_bayar" class="form-control" id="inputBukti" value="{{ old('bukti_bayar') }}" required>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value=""
                        id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Dengan sumbit anda telah menyetujui <a href="ketentuan">syarat dan
                            ketentuan</a> yang tersedia.
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        Centang kotak untuk dapat lanjut ....
                    </div>
                </div>
            </div>
            <p>Setelah membayar tim akan memproses 1x24 jam pada hari kerja.</p>

            <p class="uk-text-right">
                <button type="submit" class="uk-button tombolblu uk-width-1-  uk-margin-bottom roundet "
                type="button">Submit Keseluruhan Data</button>

                <button
                class="uk-button uk-button-danger uk-width-1-1 uk-modal-close uk-margin-right roundet"
                type="button">Cancel</button>
            </p>
        </form>
        <br>
        <br>
    </div>
</div>