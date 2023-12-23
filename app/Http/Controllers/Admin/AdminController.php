<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailAdminCabang;
use App\Models\DetailMember;
use App\Models\IklanMember;
use App\Models\Pembayaran;
use App\Models\Regency;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function berandaAdmin(){
        return view('Admin.Beranda.beranda');
    }

    public function profile_admin($id){
        $kota = Regency::get();
        $profile_admin = DetailAdminCabang::where('id_user', $id)->first();
        return view('Admin.Profile.profile', compact('profile_admin', 'kota'));
    }

    public function pembayaran_iklan(){
        $iklan_member = IklanMember::get();
        $detailMember = DetailMember::get();
        $profile_admin = DetailAdminCabang::where('id_user', Auth::user()->id)->first();
        return view('Admin.Konfirmasi.konfirmasi_iklan', compact('iklan_member', 'detailMember', 'profile_admin'));
    }

    public function konfirmasi_pembayaran_iklan($id){
        IklanMember::where('id', $id)->update([
            'status_konfirmasi' => 1,
            'expire_date' => Carbon::now()->addMonth(1),
            'updated_at' => Carbon::now()
        ]);
        toast('Berhasil Konfirmasi Pembayaran Iklan','success');
        return redirect()->route('PembayaranIklan')->with('success');
    }

    public function pembayaran(){
        $pembayaran = Pembayaran::get();
        $detailMember = DetailMember::get();
        $profile_admin = DetailAdminCabang::where('id_user', Auth::user()->id)->first();
        return view('Admin.Konfirmasi.konfirmasi_pembayaran', compact('pembayaran', 'detailMember', 'profile_admin'));
    }
    
    public function konfirmasi_pembayaran($id){
        Pembayaran::where('id', $id)->update([
            'status_konfirmasi' => 1,
        ]);
        toast('Berhasil Konfirmasi Pembayaran','success');
        return redirect()->route('Pembayaran')->with('success');
    }
}
