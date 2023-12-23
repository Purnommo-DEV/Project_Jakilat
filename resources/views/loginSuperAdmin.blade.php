@extends('layout.master')
@section('tittle', 'Login SuperAdmin')
@section('content')

<div class="blugra uk-padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 uk-background-default uk-padding-top roundey">
                <div class="container">
                    <div class="row uk-margin-medium-top">
                        <div class="col-sm-8 col-12">
                            <h1 class="roboto uk-text-bold uk-text-center uk-text-left@s itam">Login SuperAdmin</h1>
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
                                                    <input name="role" value="SuperAdmin" type="hidden" hidden>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="uk-button uk-margin-top tomkun roundey roboto uk-text-bold uk-width-1-1">Masuk
                                        </button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection