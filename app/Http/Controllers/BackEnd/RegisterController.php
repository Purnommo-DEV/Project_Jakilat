<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use App\Models\DetailUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\InputRequest;
use App\Http\Controllers\Controller;
use App\Models\DetailCustomer;
use App\Models\DetailMember;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function save_member(InputRequest $request){
      
            $member_baru = new User;
            $dataUnik = Str::random(6);
            $member_baru->name = $request->name;
            $member_baru->email = $request->email;
            $member_baru->password = Hash::make($request->password);
            $member_baru->role = "Member";
            $member_baru->save();

            $detail_member_baru = new DetailMember;
            $detail_member_baru->id_user = $member_baru->id;
            $detail_member_baru->pendidikan_terakhir = $request->pendidikan_terakhir;
            $detail_member_baru->keahlian = $request->keahlian;
            $detail_member_baru->alamat = $request->alamat;
            $detail_member_baru->wilayah_id = $request->wilayah_id;
            $detail_member_baru->harga_jasa = 0;
            $detail_member_baru->deskripsi_diri = $request->deskripsi_diri;
            $detail_member_baru->nomor_hp = $request->nomor_hp;
            $detail_member_baru->foto_diri = 0;

            if ($request->hasFile('ktp')) {
                $file = $request->file('ktp');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time() . $dataUnik .'.' . $ekstensi;
                $file->move('member/ktp', $filename);
                $detail_member_baru->ktp = $filename;
            }

            if ($request->hasFile('berkas_persyaratan')) {
                $file = $request->file('berkas_persyaratan');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time() . $dataUnik .'.' . $ekstensi;
                $file->move('member/berkas_persyaratan', $filename);
                $detail_member_baru->berkas_persyaratan = $filename;
            }

            if ($request->hasFile('sertifikat_keterampilan')) {
                $file = $request->file('sertifikat_keterampilan');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time() . $dataUnik .'.' . $ekstensi;
                $file->move('member/sertifikat_keterampilan', $filename);
                $detail_member_baru->sertifikat_keterampilan = $filename;
            }
            
            if ($request->hasFile('rekomendasi')) {
                $file = $request->file('rekomendasi');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time() . $dataUnik .'.' . $ekstensi;
                $file->move('member/rekomendasi', $filename);
                $detail_member_baru->rekomendasi = $filename;
            }

            if ($request->hasFile('foto_diri')) {
                $file = $request->file('foto_diri');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time() . $dataUnik .'.' . $ekstensi;
                $file->move('member/foto_diri', $filename);
                $detail_member_baru->foto_diri = $filename;
            }
            // $detail_member_baru->remember_token = "";
            $detail_member_baru->status = "1";
            $detail_member_baru->siap_terima_order = "1";
            $detail_member_baru->save();
            
            toast('Anda berhasil mendaftar sebagai Member, Silahkan tunggu Konfirmasi dari Admin','success');
            return redirect()->route('login')->with('success');
    }
    public function save_customer(InputRequest $request){
      
            $customer_baru = new User;
            $customer_baru->name = $request->name;
            $customer_baru->email = $request->email;
            $customer_baru->password = Hash::make($request->password);
            $customer_baru->role = "Customer";
            $customer_baru->save();
            
            $detail_customer_baru = new DetailCustomer;
            $detail_customer_baru->id_user = $customer_baru->id;
            $detail_customer_baru->alamat = $request->alamat;
            $detail_customer_baru->nomor_hp = $request->nomor_hp;
            $detail_customer_baru->wilayah_id = $request->wilayah_id;
            $detail_customer_baru->save();

            toast('Anda berhasil mendaftar sebagai Customer, Silahkan tunggu Konfirmasi dari Admin','success');
            return redirect()->route('login')->with('success');
    }

}
