<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="container">

        <div id="tampil2">
            <div class="row mt-4">
                <div class="uk-margin" uk-margin>
                    <div class="uk-form-controls">
                        <form action="{{ route('masukkanHarga') }}" method="post">
                            @csrf
                            <input type="text" class="uk-input uk-form-width-medium" name="harga_jasa"
                                id="inputHarga" placeholder="Contoh : 50.000" required>
                            <button type="submit" class="uk-button tombolblu  ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <h4 class="uk-text-bold">Harga Jasa Anda Sekarang Senilai:</h4>
                    </div>
                    <div class="row">
                        <h2 class="roboto">{{ $dataMember->harga_jasa }}</h2>
                    </div>
                </div>
                <div class="col-sm-5 justify-content-center">
                    <img class="uk-width-1-2 uk-align-center namacus" src="{{ asset('asset/img/money.svg') }}"
                        alt="">
                </div>
            </div>
        </div>

        <div id="tampil3">
            <div class="row">
                <a href="#tambahfoto" uk-toggle>
                    <h2> </h2>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-6">
                <h2>Galeri</h2>
            </div>
            <div class="col-sm-6 col-6  ">
                <a href="#tambahfoto" uk-toggle>
                    <button class="uk-button roboto tombolblu float-end">Tambah Foto</button>
                </a>
            </div>
            <div id="tambahfoto" uk-modal>
                <div class="uk-modal-dialog uk-modal-body roundey">
                    <h2 class="uk-modal-title">Headline</h2>

                    <div class="uk-upload-box">
                        <div id="error-alert" class="uk-alert-danger uk-margin-top uk-hidden" uk-alert>
                            <p id="error-messages"></p>
                        </div>
                        <div class="drop__zone uk-placeholder uk-text-center">
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-middle mb-3">Tarik fotomu kesini atau</span>
                            <div uk-form-custom>
                                <input type="file" name="berkas_penawar" class="form-control"
                                    accept="image/png, image/jpeg" required>
                                <span class="uk-link">Pilih Di Perangkat</span>
                            </div>
                            <ul id="preview"
                                class="uk-list uk-grid-match uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"
                                uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .list-item; delay: 80"></ul>
                        </div>
                    </div>

                    <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                    <script>
                        var bar = document.getElementById('js-progressbar');

                        UIkit.upload('.js-upload', {

                            url: '',
                            multiple: true,

                            beforeSend: function(environment) {
                                console.log('beforeSend', arguments);

                                // The environment object can still be modified here.
                                // var {data, method, headers, xhr, responseType} = environment;

                            },
                            beforeAll: function() {
                                console.log('beforeAll', arguments);
                            },
                            load: function() {
                                console.log('load', arguments);
                            },
                            error: function() {
                                console.log('error', arguments);
                            },
                            complete: function() {
                                console.log('complete', arguments);
                            },

                            loadStart: function(e) {
                                console.log('loadStart', arguments);

                                bar.removeAttribute('hidden');
                                bar.max = e.total;
                                bar.value = e.loaded;
                            },

                            progress: function(e) {
                                console.log('progress', arguments);

                                bar.max = e.total;
                                bar.value = e.loaded;
                            },

                            loadEnd: function(e) {
                                console.log('loadEnd', arguments);

                                bar.max = e.total;
                                bar.value = e.loaded;
                            },

                            completeAll: function() {
                                console.log('completeAll', arguments);

                                setTimeout(function() {
                                    bar.setAttribute('hidden', 'hidden');
                                }, 1000);

                                alert('Upload Completed');
                            }

                        });
                    </script>

                    <p class="uk-text-right">
                        <button class="uk-button uk-button-danger uk-modal-close uk-margin-right roundet"
                            type="button">Cancel</button>
                        <button class="uk-button tombolblu uk-width-1-4 roundet " type="submit">Save</button>
                    </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="row uk-margin-bottom uk-margin-top uk-h3">
            @foreach ($galeris as $item)
                <div class="col-sm-4 col-6 uk-margin-bottom">
                    <div class="uk-inline">
                        <div class=uk-grid uk-lightbox="animation: slide">
                            <div class="uk-card">
                                <a class="uk-inline" href="../public/member/gambar/{{ $item->gambar }}"
                                    data-caption="Caption 1">
                                    <img class="uk-background-cover uk-hover gambarcard roundet"
                                        src="../public/member/gambar/{{ $item->gambar }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="uk-overlay uk-overlay-default uk-position-top namacus">
                            <div class="uk-position uk-position-top-right uk-margin-large-left ">
                                <button type="button" class="btn tomboltrans ms-5 ms-sm-4 mt-3">
                                    <span uk-icon="more-vertical"></span>
                                </button>
                                <div class="uk-position-right" uk-dropdown="mode: click">
                                    <a href="#"class="warnaMerah delete" uk-tooltip="Hapus"
                                        gambar-id = "{{ $item->id }}">
                                        <button class="uk-button uk-button-danger tombolpus uk-text-bold uk-text-left">
                                            <span class="uk-icon tombolpusic uk-icon-image me-1 mt-n1"
                                                style="background-image: url({{ asset('asset/img/trash.svg') }});">
                                            </span>Hapus Foto
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
