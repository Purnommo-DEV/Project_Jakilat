<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="{{ asset('asset/plugins/bootstrap/bootstrap.min.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- UIkit CSS -->
    <!-- {{-- <link rel="stylesheet" href="{{asset('asset/plugins/uikit/css/uikit.min.css')}}"> --}} -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    <!-- Style manual -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/uikit/css/ionicons.min.css') }}">


    <!-- Meta -->
    <meta name="description"
        content="Temukan Jasa Apapun Dengan Lebih Aman Hanya Di Jakilat, Kami Menawarkan Jasa Dengan Kualitas Terbaik">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('asset/img/jakilat.png') }}" type="image/x-icon">

    <title>JAKILAT | @yield('tittle')</title>
</head>

<body>

    <!-- memanggil konten -->
    @yield('content')


    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                        <h3>JAKILAT</h3>
                        <p>Temukan Jasa Apapun Dengan Lebih Aman Hanya Di Jakilat, Kami Menawarkan Jasa Dengan Kualitas
                            Terbaik.</p>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Contact Person</h3>
                        <ul>
                            <li><a href="#">WA : 089619715773</a></li>
                            <li><a href="#">Email : cs@jakilat.com</a></li>
                            <li><a href="#">Alamat : Jl. Sui Raya Dalam Komplek BDN No.2, Kubu Raya, Kalimantan
                                    Barat. </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="/">Portal</a></li>
                            <li><a href="#">Cari Jasa</a></li>
                            <li><a href="tentangKami">Tentang Kami</a></li>
                            <li><a href="gabungMember">Gabung Member</a></li>
                            <li><a href="ketentuan">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <p></p>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a
                        href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
                            class="icon ion-social-snapchat"></i></a><a href="#"><i
                            class="icon ion-social-instagram"></i></a></div>
                <p class="copyright text-center">© 2022 JAKILAT | Jakilat merupakan produk dari Perusahaan </p>
            </div>
        </footer>
    </div>


    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <!-- UIkit JS -->
    <!-- <script src="{{ asset('asset/plugins/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/uikit/js/uikit-icons.min.js') }}"></script> -->
    <!-- Bootstrap JS -->
    <!-- <script src="{{ asset('asset/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/bootstrap/bootstrap.min.js') }}"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="{{ asset('asset/plugins/toastr/toastr.min.js') }}"></script>
    @yield('footer')
</body>

</html>
