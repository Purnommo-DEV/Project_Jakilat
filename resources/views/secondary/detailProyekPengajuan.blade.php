
@extends('layout/master')
@section('tittle', 'Detail Proyek Pengajuan')
@section('content')

<div class="abu">
    <div class="blugra namacus uk-padding-large roundey">
        <div class="container uk-margin-top">
         <h1 class="uk-heading-line uk-text-center puteh fw-bold"><span>Pembangunan Taman</span></h1>
    </div>
</div>
    <br>
<div class="uk-background-default roundey uk-padding-large">
    <div class="container">
    <p> Jika menemukan yang terbaik, anda dapat langsung menghubungi mereka melalui kontak yang tersedia di berkas.</p>
    <hr>

    <table class="uk-table">
    <thead>
        <tr>
            <th>Nama Penawar</th>
            <th>Harga Penawaran</th>
            <th>Berkas Penawaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($daftarPenawaranHargaProyek as $item)
        <tr>
            <td>
                <a href="{{ route('profileMember',$item->id_penawar_user) }}" target="_blank">{{ $item->userPenawar->name }}</a>
            </td>
            <td><a href="#" class="warnaHijau">{{ $item->harga_penawar }}</a></td>
            <td>
                <a href="/member/berkas/penawaran/{{ $item->berkas_penawar }}" 
                    class="warnaBiru" uk-icon="cloud-download" uk-tooltip="tekan untuk unduh" downlaod>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>

@endsection