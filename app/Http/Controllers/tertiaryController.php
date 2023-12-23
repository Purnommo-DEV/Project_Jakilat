<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use App\Models\Regency;
use App\Models\ProyekJasa;
use App\Models\IklanMember;
use App\Models\DetailMember;
use App\Models\JasaDiPilih;
use App\Models\Keahlian;
use App\Models\Pembayaran;
use App\Models\PengajuanHarga;
use App\Models\ProyekPenawaranHarga;
use Illuminate\Support\Facades\Auth;

class tertiaryController extends Controller
{
    public function berandaMember()
    {
        $keahlian = Keahlian::get();
        $kota = Regency::get();
        $galeris = Galeri::where('id_user', Auth::user()->id)->get();
        $dataMember = DetailMember::where('id_user', Auth::user()->id)->first();
        $pengajuanIklan = IklanMember::where('id_user', Auth::user()->id)->first();
        $pengajuanHarga = PengajuanHarga::where('id_penawar_user', Auth::user()->id)->first();
        $proyekDikerjakan = JasaDiPilih::where('id_user_jasa', Auth::user()->id)->first();
        $pembayaran = Pembayaran::where('id_user', Auth::user()->id)->get();
        return view('tertiary.berandaMember', compact('dataMember', 'keahlian', 'galeris', 'kota', 'pengajuanIklan','pengajuanHarga', 'proyekDikerjakan', 'pembayaran'));
    }

    public function bukti_bayar(){
        return view('tertiary.buktiBayar');
    }

    public function profileMember($id)
    {
        $dataProyekJasa = ProyekJasa::where('id_user',Auth::user()->id)->get();
        $dataMember = DetailMember::where('id_user',$id)->first();
        $galeriMember = Galeri::where('id_user',$id)->get();
        $semuadataMember = User::where('role','=','Member')->get();
        return view('tertiary.profileMember', compact('dataMember', 'galeriMember','dataProyekJasa','semuadataMember'));
    }

    public function editBiodataMember()
    {
        return view('tertiary.editBiodataMember');
    }

    public function iklan()
    {
        return view('tertiary.iklan');
    }

    public function proyekPengajuan()
    {
        $proyekPenawaran = ProyekPenawaranHarga::get();
        return view('tertiary.proyekPengajuan', compact('proyekPenawaran'));
    }
}
