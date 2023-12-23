@extends('layout/master')


@section('tittle', 'Tambah Proyek')


@section('content')

<div class="abu">

  <!-- Form -->
  <div class="blugra uk-padding-large  ">
    <div class="container">
      <div class="text-left ">
        <h1 class="fw-bold puteh">Tambahkan Proyek Pilih Jasa/Tukang</h1>

      </div>
    </div>
  </div>

  <div class="container namahed">
    <div class="row">
      <div class="col-md-8 me-5">
        <div class="row uk-background-default px-3 roundey uk-box-shadow-large">
          <div class="container ">
            <div class="row mt-5 ">
              <h2 class="roboto itam">Isi Data Dibawah Dengan benar</h2>
            </div>
            <form class="row g-3 uk-margin-small-top uk-margin-large-bottom"
              action="{{ route('simpanProyekPilihJasa') }}" method="POST">
              @csrf
              <div class="col-md-12">
                <label for="inputNama" class="form-label">Nama Proyek</label>
                <input type="text" name="nama_proyek" class="form-control" placeholder="Pembangunan Jalan"
                  id="inputNama" required>
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat Proyek</label>
                <textarea class="uk-textarea" name="alamat_proyek" rows="5" id="inputAddress"
                  placeholder="Jl.Merdeka barat" required></textarea>
              </div>

          </div>
        </div>
        <br>

        <br>
      </div>
      <div class="col-md-3 uk-box-shadow-large uk-height-1-1 uk-background-default roundey ps-3 mb-5">
        <div class="row mt-5">
          <h4 class="roboto itam uk-text-bold">Lihat Status</h4>
        </div>
        <div class="col-12">
          <p class="textabu">Status Proyek Anda :</p>
          <input uk-tooltip="Status Proyek Anda Akan Draf hingga semua sudah terlengkapi."
            class="uk-input uk-form-controls" type="text" value="Draf" disabled>
          <p>Setelah data dipastikan benar, kami akan menyiapkan jasa/tukang pilihan anda dan segera menghubungi anda.
          </p>
          <div class="col-12">
            <button type="submit" class="uk-button tombol uk-width-4-4 mb-4">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>



  </div>
</div>

@endsection
@section('js')
<script>
  $(document).ready(function () {
    $('.keahlian').select2();
  });
</script>
@endsection