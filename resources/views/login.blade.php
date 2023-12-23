@extends('layout/master')
@section('tittle', 'Login')
@section('content')

{{-- <br><br>
<div class="container">
<h1 class="uk-heading-line uk-text-center fw-bold"><span>Login Pengguna</span></h1>
</div><br>

<div class="container">
<div class="d-flex justify-content-center">
<div class="uk-card uk-card-default uk-card-large uk-card-body">
<ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
    <li><a href="#">Customer</a></li>
    <li><a href="#">Member</a></li>
</ul>

<ul class="uk-switcher uk-margin">
   <!-- Login Pengguna  -->
    <li>
    <form action="{{route('postLogin')}}" method="POST">
@csrf
<div class="uk-margin">
    <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: user"></span>
        <input name="email" class="uk-input @error('email') is-invalid @enderror" placeholder="Email" type="text">
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
    </div>
</div>
<div class="uk-margin">
    <div class="uk-inline">
        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
        <input name="password" type="password" class="uk-input @error('password') is-invalid @enderror"
            placeholder="Password" type="text">
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
        <input name="role" value="Customer" type="hidden" hidden>
    </div>
</div>
<button type="submit" class="uk-button uk-button-primary">Masuk</button>
</form>
<p>Belum punya akun ? <a href="gabungCustomer"> Daftar</a></p>
</li>


<!-- Login Member -->
<li>
    <form action="{{route('postLogin')}}" method="POST">
        @csrf
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input name="email" class="uk-input" placeholder="Email" type="text">
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input name="password" type="password" class="uk-input" placeholder="Password" type="text">
                <input name="role" value="Member" type="hidden" hidden>
            </div>
        </div>
        <button type="submit" class="uk-button uk-button-primary">Masuk</button>
    </form>
    <p>Belum punya akun ? <a href="gabungMember"> Daftar</a></p>
</li>
</ul>
</div>
</div>
</div> --}}


<div class="blugra uk-padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 uk-background-default uk-padding-top roundey">
                <div class="container">
                    <div class="row uk-margin-medium-top">
                        <div class="col-sm-4 col-12">
                            <h1 class="roboto uk-text-bold uk-text-center uk-text-left@s itam">Login</h1>
                        </div>
                        <div class="col-sm-8 col-12  ">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <ul class="nav nav-pills uk-margin-medium-top@s mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active textabu " id="pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Customer</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link textabu " id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Member</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row ">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active uk-margin-bottom" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                    <form class="uk-form-stacked" action="{{route('postLogin')}}" method="POST">
                                    @csrf
                                        <div class="uk-margin">
                                            <label class="uk-form-label roboto uk-text-medium uk-text-bold textabu"
                                                for="form-stacked-text">Email</label>
                                            <div class="uk-form-controls uk-width-1-1">
                                                <div class="uk-inline uk-width-1-1 ">
                                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                    <input name="email" class="uk-input formblud roundet @error('email') is-invalid @enderror" id="form-stacked-text" type="text" placeholder="Masukkan Email Anda">
                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label roboto uk-text-medium uk-text-bold textabu"
                                                for="form-stacked-text">Passaword</label>
                                            <div class="uk-form-controls uk-width-1-1">
                                                <div class="uk-inline uk-width-1-1 ">
                                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                                    <input name="password" type="password" class="uk-input formblud roundet @error('password') is-invalid @enderror"
                                                    placeholder="Password" id="form-stacked-text">
                                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                    <input name="role" value="Customer" type="hidden" hidden>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="uk-button uk-margin-top tomkun roundey roboto uk-text-bold uk-width-1-1">Masuk
                                        </button>
                                    </form>
                                <div class="row uk-margin-medium-top justify-content-center">
                                    <p class="uk-text-center">Belum Punya Akun? <a href="gabungCustomer">Daftar</a></p>
                                </div>
                            </div>

                            <div class="tab-pane fade  uk-margin-bottom" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <form class="uk-form-stacked" action="{{route('postLogin')}}" method="POST">
                                    @csrf
                                    <div class="uk-margin">
                                        <label class="uk-form-label roboto uk-text-medium uk-text-bold textabu"
                                            for="form-stacked-text">Email</label>
                                        <div class="uk-form-controls uk-width-1-1">
                                            <div class="uk-inline uk-width-1-1 ">
                                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                <input name="email" class="uk-input formblud roundet @error('email') is-invalid @enderror" id="form-stacked-text" type="text" placeholder="Masukkan Email Anda">
                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label roboto uk-text-medium uk-text-bold textabu"
                                            for="form-stacked-text">Password</label>
                                        <div class="uk-form-controls uk-width-1-1">
                                            <div class="uk-inline uk-width-1-1 ">
                                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                                <input name="password" type="password" class="uk-input formblud roundet @error('password') is-invalid @enderror"
                                                placeholder="Password" id="form-stacked-text">
                                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                <input name="role" value="Member" type="hidden" hidden>
                                            </div>

                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="uk-button uk-margin-top tomkun roundey roboto uk-text-bold uk-width-1-1">Masuk
                                    </button>
                                </form>
                                <div class="row uk-margin-medium-top justify-content-center">
                                    <p class="uk-text-center">Belum Punya Akun? <a href="gabungMember">Daftar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection