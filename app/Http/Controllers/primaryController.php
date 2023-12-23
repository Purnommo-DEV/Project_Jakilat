<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Regency;
use App\Models\Keahlian;
use App\Models\DetailMember;
use App\Models\DetailCustomer;
use App\Models\PengajuanHarga;
use Illuminate\Support\Facades\DB;
use App\Models\ProyekPenawaranHarga;

class primaryController extends Controller
{

    public function index()
    {
        $proyekPenawaran = ProyekPenawaranHarga::get();
        // dd($proyekPenawaran->id);
        // $pengajuanHarga = PengajuanHarga::first()->max('harga_penawar');
        // $pengajuanHarga = PengajuanHarga::whereRaw('harga_penawar = (select max(`harga_penawar`) from pengajuan_harga)')->get();
        // dd($pengajuanHarga);
        // $pengajuanHarga = PengajuanHarga::where('id_proyek_penawaran', $id_proyek_harga)->max('harga_penawar');
        $pengajuanHarga = PengajuanHarga::orderBy('harga_penawar', 'desc')->get();
        $dataMember = DetailMember::with('relasi_keahlian')->get();
        $dataCustomer = DetailCustomer::get();
        return view('home', compact('dataMember', 'dataCustomer', 'proyekPenawaran', 'pengajuanHarga'));
    }

    public function tentangKami()
    {
        return view('tentangKami');
    }

    public function gabungMember()
    {
        $kota = Regency::get();
        $user = User::get();
        $keahlian = Keahlian::get();
        return view('gabungMember', compact('user', 'kota', 'keahlian'));
    }

    public function gabungCustomer()
    {
        $kota = Regency::get();
        return view('gabungCustomer', compact('kota'));
    }

    public function ketentuan()
    {
        return view('ketentuan');
    }

    public function login()
    {
        return view('login');
    }

    public function login_admin()
    {
        return view('loginAdmin');
    }

    public function login_super_admin()
    {
        return view('loginSuperAdmin');
    }

    public function berandaUtama()
    {
        $proyekPenawaran = ProyekPenawaranHarga::get();
        $pengajuanHarga = PengajuanHarga::orderBy('harga_penawar', 'desc')->get();
        $dataMember = DetailMember::get();
        return view('berandaUtama', compact('dataMember', 'proyekPenawaran', 'pengajuanHarga'));
    }
}
