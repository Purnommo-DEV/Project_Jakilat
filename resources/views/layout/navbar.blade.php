<nav class="uk-navbar-container uk-box-shadow-xlarge" uk-navbar>
    <div class="uk-navbar-left uk-margin-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="">
                    <img src="{{ asset('asset/img/jakilat.png') }}" class="gambarlogo2" alt=""></a>
            </li>
            <li class="uk-parent">
                <a href=""></a>
            </li>
            <li>
                <a href=""></a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        @if (Auth::check())
            <ul class="uk-navbar-nav">
                <li class="uk-active uk-margin-top">
                    <button class="uk-button  btn-light" type="button">
                        <div class="row uk-margin-top">
                            <div class="col-md-3 col-12">
                                @if (Auth::user()->role == 'Member')
                                    <img src="../member/foto_diri/{{ dataMember()->foto_diri }}"
                                        class="gambarakun  uk-border-circle uk-align-left@s  uk-align-right "
                                        alt="">
                                @elseif (Auth::user()->role == 'Customer')
                                    <img src="../customer/foto_diri/{{ dataCustomer()->foto_diri }}"
                                        class="gambarakun  uk-border-circle uk-align-left@s  uk-align-right "
                                        alt="">
                                @else
                                    <img src="../member/foto_diri/{{ dataAdminCabang()->foto_diri }}"
                                        class="gambarakun  uk-border-circle uk-align-left@s  uk-align-right "
                                        alt="">
                                @endif
                            </div>
                            <div class="col-md-8 col-8">
                                <h3
                                    class="uk-align-right uk-text-left uk-margin-remove-left uk-visible@s uk-margin-small-top">
                                    {{ Auth::user()->name }}</h3>
                            </div>
                        </div>
                    </button>
                    <div uk-dropdown="animation: uk-animation-slide-top-small; pos: bottom-right duration: 1000 mode: click"
                        class="uk-margin-top roundet">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li>
                                @if (Auth::user()->role == 'Member')
                                    <a href="{{ route('berandaMember') }}">
                                        <button
                                            class="uk-button uk-button-primary uk-width-1-1  uk-text-bold uk-text-center">
                                            <span class="uk-icon tombolpusic uk-icon-image me-1 mt-n1"
                                                style="background-image: url({{ asset('asset/img/profilputeh.svg') }});">
                                            </span>Profil
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('berandaCustomer') }}">
                                        <button
                                            class="uk-button uk-button-primary uk-width-1-1  uk-text-bold uk-text-center">
                                            <span class="uk-icon tombolpusic uk-icon-image me-1 mt-n1"
                                                style="background-image: url({{ asset('asset/img/profilputeh.svg') }});">
                                            </span>Profil
                                        </button>
                                    </a>
                                @endif
                            </li>
                            <li>
                                <button type="button"
                                    class="uk-button uk-button-danger uk-margin-top  uk-text-bold uk-text-left"
                                    uk-toggle="target: #logout"><span
                                        class="uk-icon tombolpusic uk-icon-image me-1 mt-n1"
                                        style="background-image: url({{ asset('/img/off_solid.svg') }});"></span>Logout</button>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div id="logout" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <p>{{ Auth::user()->name }}&nbsp;Yakin Ingin Keluar</p>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <p class="uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Tidak</button>
                            <button class="uk-button uk-button-primary" type="submit">Ya</button>
                        </p>
                    </form>
                </div>
            </div>
        @else
            <div class="uk-navbar-nav uk-margin-right">
                <a href="{{ route('login') }}" class="uk-margin-right">
                    <button class="uk-button tombolblu">
                        Login
                    </button>
                </a>
                <a href="#jdaftar" uk-toggle>
                    <button class="uk-button tombolb">
                        Daftar
                    </button>
                </a>
                <div id="jdaftar" class="uk-flex-top" uk-modal>
                    <div class="roundey uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                        <button class="uk-modal-close-default" type="button" uk-close></button>

                        <div class="container">
                            <div class="row">
                                <h2 class="itam uk-text-center roboto">Anda Ingin Mendaftar sebagai apa?</h2>
                            </div>
                            <div class="row uk-margin-top">
                                <div class="col-sm-6 col-12">
                                    <a class="" href="{{ route('gabungMember') }}">
                                        <button class="uk-button roboto tombolblu uk-width-1-1 uk-margin-bottom">
                                            Member</button>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <a class="uk-margin-top" href="{{ route('gabungCustomer') }}">
                                        <button class="uk-button roboto tombolblu uk-width-1-1  "> Customer</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </div>
</nav>
