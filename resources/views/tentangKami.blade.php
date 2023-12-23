
@extends('layout/masterUtama')


@section('tittle', 'Tentang Kami')



@section('content')

<div class="uk-height-medium uk-overlay  bayang uk-flex-middle uk-background-cover uk-light" data-src="{{asset('asset/img/bg-gedung.jpg')}}" uk-img>
    <div class="mask uk-width-1-1 uk-height-1-1 " style="background-color: rgba(0, 0, 0, 0.6);">
       
    <h1 class="uk-heading-line uk-text-center uk-position-center  fw-bold"><span>Tentang Kami</span></h1>
        
    </div>
</div>
<br>
<br>

<!-- Deskripsi -->
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <h1 class="text-left"> Apa Itu Jakilat </h1>
            <ul class="list-unstyled uk-text-left">
                <li>Jakilat adalah platform yang memungkinkan untuk pekerja lepas memperluas jangkauan jaringan pemasaran, kerjasama atau lainnya.</li>
                <li>Kami memastikan anggota kami yang terdaftar adalah tenaga ahli yang profesional pada bidangnya.</li>
                <li>Kami mengutamakan keamanan dan kenyamanan untuk para customer agar mendapatkan kebutuhan yang sesuai.</li>
                <li>Kami juga memastikan transaksi yang dilakukan aman dan flexibel.</li>
            </ul>
        </div>
        <div class="col-md-6">
                <img src="{{asset('asset/img/pinky-girl.jpg')}}" alt="">
        </div>
    </div>
    <div class="row uk-margin-large-top">
        <div class="col-md-6"  uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <img src="{{asset('asset/img/blue-girl.jpg')}}" alt="">
        </div>
        <div class="col-md-6" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
            <div class="row">
                <h1 class="text-center font-h1"> Kontak Kami </h1>
                <p class="text-center">Hubungi Kami Akan Segera Membantu</p>
            </div>
    
         
        <div>
            <div class="uk-card uk-card-default uk-card-body">
            <p uk-icon="receiver" ></p> <p></p>
             089619715773
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
            <p uk-icon="google" ></p> <p></p>
             cs@jakilat.com
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
            <p uk-icon="location" ></p> <p></p>
            Jl. Sui Raya Dalam Komplek BDN No.2, Kubu Raya, Kalimantan Barat.
            </div>
        </div>
 
        </div>
    </div>
  
  

    <!-- Testimoni -->
    <div uk-scrollspy-class="uk-animation-slide-top">
        <h1 class="text-center font-h1" > TESTIMONI </h1>
        <p class="text-center">Dengarkan Apa Kata Mereka</p>
    <br>
    </div>
    <!-- Testimoni 1 -->
    <div class="row"uk-scrollspy-class="uk-animation-slide-top">
        <div class="col-md-4 col-6 uk-margin-bottom">
            <div class="uk-card uk-card-default uk-box-shadow-large uk-animation-slide-top-medium">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Surya Kencana</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">CEO Antam</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
           
            </div>
        </div>
        <div class="col-md-4 col-6 uk-margin-bottom">
            <div class="uk-card uk-card-default uk-box-shadow-large uk-animation-slide-top-medium ">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Surya Kencana</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">CEO Antam</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
           
            </div>
        </div>
        <div class="col-md-4 col-6 uk-margin-bottom">
            <div class="uk-card uk-card-default uk-box-shadow-large uk-animation-slide-top-medium">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Surya Kencana</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">CEO Antam</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
           
            </div>
        </div>
    </div>

    <!-- Testimoni 2 -->
   




</div><br>

@endsection