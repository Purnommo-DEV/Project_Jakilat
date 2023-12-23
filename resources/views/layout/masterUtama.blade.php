<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="{{ asset('asset/plugins/bootstrap/bootstrap.min.css') }}"> -->
    <!-- UIkit CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('asset/plugins/uikit/css/uikit.min.css') }}"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- UIkit CSS -->
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

    {{-- navbar --}}
    <nav class="uk-navbar-container uk-box-shadow-xlarge" uk-navbar>

        <div class="uk-navbar-left uk-margin-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="">

                        <img src="{{ asset('asset/img/jakilat.png') }}" class="gambarlogo2" alt=""></a></li>
                <li class="uk-parent"><a href="">

                    </a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active uk-margin-top">
                    <button class="uk-button uk-button-default " type="button">

                        {{-- <img src="{{asset('asset/img/akun.jpg')}}" class="gambarakun  uk-border-circle uk-align-left" alt="">
                    <h3 class="uk-align-right uk-text-right uk-margin-remove-left uk-margin-small-top">Muhammad Iwan Arrahman</h3> --}}
                    </button>
                    <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>

                </li>

                <li><a href=""></a></li>
            </ul>
        </div>

    </nav>
    {{-- akhr navbar --}}

    <!-- memanggil konten -->
    @yield('content')

    <div class="container">
        <div class="fixed-bottom">
            <nav class="uk-navbar-container uk-margin rounded-pill shadow-lg navBawah" uk-navbar>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li><a class="warnaBiru marginNav marginNav2" href="/homeJakilat" uk-icon="home"
                                uk-tooltip="Menuju Portal"></a></li>
                        <li><a class="warnaBiru marginNav" href="#" uk-tooltip="Balik Paling Atas" uk-totop></a>
                        </li>
                        <li><a class="warnaBiru marginNav" href="#" uk-icon="reply" onclick="goBack()"
                                uk-tooltip="Kemballi Ke Halaman Sebelumnya"></a></li>
                        <li><a class="warnaBiru marginNav" href="/" uk-icon="sign-in" uk-tooltip="Masuk Akun"></a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright text-center">© 2022 JAKILAT | Jakilat merupakan produk dari Perusahaan </p>
            </div>
        </footer>

        <br><br><br>

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
