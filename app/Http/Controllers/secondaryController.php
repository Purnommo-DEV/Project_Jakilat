<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Regency;
use App\Models\ProyekJasa;
use App\Models\JasaDiPilih;
use App\Models\DetailMember;
use Illuminate\Http\Request;
use App\Models\DetailCustomer;
use App\Models\PengajuanHarga;
use App\Models\ProyekPenawaranHarga;
use Illuminate\Support\Facades\Auth;

class secondaryController extends Controller
{
    public function beranda()
    {
        $penawaranHarga = ProyekPenawaranHarga::where('id_user', Auth::user()->id)->get();
        $kota = Regency::get();
        $proyekJasa = ProyekJasa::where('id_user', Auth::user()->id)->get();
        $data_customer = DetailCustomer::where('id_user', Auth::user()->id)->first();
        return view('secondary.beranda', compact('penawaranHarga', 'proyekJasa', 'data_customer','kota'));
    }

    public function deskripsi()
    {
        $dataMember = DetailMember::get();
        return view('secondary.deskripsi', compact('dataMember'));
    }

    public function editBiodata($id)
    {
        $kota = Regency::get();
        $data_customer = DetailCustomer::where('id_user', Auth::user()->id)->first();
        return view('secondary.editBiodata', compact('data_customer','kota'));
    }

    public function editProyek($id)
    {
        $detailProyek = ProyekJasa::where('id',$id)->first();
        $jasaPilihan = JasaDiPilih::where('id_proyek_jasa', $id)->get();
        return view('secondary.editProyek', compact('detailProyek', 'jasaPilihan'));
    }

    public function tambahProyek()
    {
        // $rows = Table::where('name', 'like', 'John')->get(['id', 'name', 'family']);
        $member = DetailMember::where('siap_terima_order',1)->where('telah_terima_orderan',0)->get();
        return view('secondary.tambahProyek', compact('member'));
    }

    public function buktiBayar()
    {
        return view('secondary.buktiBayar');
    }

    public function detailProyekPengajuan($id)
    {
        $daftarPenawaranHargaProyek = PengajuanHarga::where('id_proyek_penawaran',$id)->get();
        return view('secondary.detailProyekPengajuan', compact('daftarPenawaranHargaProyek'));
    }

    public function tambahProyekPengajuan()
    {
        return view('secondary.tambahProyekPengajuan');
    }
}
