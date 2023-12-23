<?php

namespace App\Http\Controllers\BackEnd;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Regency;
use App\Models\Pembayaran;
use App\Models\IklanMember;
use Illuminate\Support\Str;
use App\Models\DetailMember;
use Illuminate\Http\Request;
use App\Models\PengajuanHarga;
use App\Http\Requests\EditRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    public function siap_terima_order($id, $siap_terima_order){

    $siap_terima_orders=  DetailMember::find($id); //Mengambil data siswa dengan ID yang ada di parameter ....., $id
    $siap_terima_orders->update([
        'siap_terima_order'=>$siap_terima_order
    ]);
    return redirect()->back()->with('success');
    }

    public function edit_biodata_member($id){
        $kota = Regency::get();
        $dataMember = DetailMember::where('id_user',$id)->first();
        return view('tertiary.editBiodataMember',compact('dataMember','kota'));
    }

    public function update_biodata_member(EditRequest $request, $id)
    {
        $dataMember = User::find($id);
        $dataMember->email = $request->email;
        $dataMember->name = $request->name;
        $dataMember->save();

        $detailDataMember = DetailMember::where('id_user',$id)->first();
        $detailDataMember->pendidikan_terakhir = $request->pendidikan_terakhir;
        $detailDataMember->keahlian = $request->keahlian;
        $detailDataMember->alamat = $request->alamat;
        $detailDataMember->wilayah_id = $request->wilayah_id;
        $detailDataMember->deskripsi_diri = $request->deskripsi_diri;
        $detailDataMember->nomor_hp = $request->nomor_hp;

        if ($request->hasFile('ktp')) {
            $path_ktp = 'member/ktp' . $detailDataMember->ktp;
            if (File::exists($path_ktp)) {
                File::delete($path_ktp);
            }
            $file = $request->file('ktp');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/ktp', $filename);
			// Image::make($file->getRealPath())->resize(500, 500)->save($path);
			$detailDataMember->ktp = $filename;
        }

        if ($request->hasFile('berkas_persyaratan')) {
            $path_berkas_persyaratan = 'member/berkas_persyaratan' . $detailDataMember->berkas_persyaratan;
            if (File::exists($path_berkas_persyaratan)) {
                File::delete($path_berkas_persyaratan);
            }
            $file = $request->file('berkas_persyaratan');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/berkas_persyaratan', $filename);
			// Image::make($file->getRealPath())->resize(500, 500)->save($path);
			$detailDataMember->berkas_persyaratan = $filename;
        }

        if ($request->hasFile('sertifikat_keterampilan')) {
            $path_sertifikat_keterampilan = 'member/sertifikat_keterampilan' . $detailDataMember->sertifikat_keterampilan;
            if (File::exists($path_sertifikat_keterampilan)) {
                File::delete($path_sertifikat_keterampilan);
            }
            $file = $request->file('sertifikat_keterampilan');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/sertifikat_keterampilan', $filename);
			// Image::make($file->getRealPath())->resize(500, 500)->save($path);
			$detailDataMember->sertifikat_keterampilan = $filename;
        }

        if ($request->hasFile('rekomendasi')) {
            $path_rekomendasi = 'member/rekomendasi' . $detailDataMember->rekomendasi;
            if (File::exists($path_rekomendasi)) {
                File::delete($path_rekomendasi);
            }
            $file = $request->file('rekomendasi');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/rekomendasi', $filename);
			// Image::make($file->getRealPath())->resize(500, 500)->save($path);
			$detailDataMember->rekomendasi = $filename;
        }

        if ($request->hasFile('foto_diri')) {
            $path_foto_diri = 'member/foto_diri' . $detailDataMember->foto_diri;
            if (File::exists($path_foto_diri)) {
                File::delete($path_foto_diri);
            }
            $file = $request->file('foto_diri');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/foto_diri', $filename);
			// Image::make($file->getRealPath())->resize(500, 500)->save($path);
			$detailDataMember->foto_diri = $filename;
        }
        $detailDataMember->save();
        toast('Berhasil Merubah Biodata','success');
        return redirect('berandaMember')->with('success');
    }

    public function update_foto_diri_member(Request $request, $id){
        $detailMember = DetailMember::where('id_user', $id)->first();
        
        if ($request->hasFile('foto_diri')) {
            $path_foto_diri = 'member/foto_diri' . $detailMember->foto_diri;
            if (File::exists($path_foto_diri)) {
                File::delete($path_foto_diri);
            }
            $file = $request->file('foto_diri');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/foto_diri', $filename);
            // Image::make($file->getRealPath())->resize(500, 500)->save($path);
            $detailMember->foto_diri = $filename;
        }
        $detailMember->save();
        toast('Berhasil Melakukan Perubahan Foto Profil','success');
        return redirect()->back()->with('success');
    }

    public function tambah_gambar(Request $request){

            $galeri = new Galeri;
            $galeri->id_user = Auth::user()->id;
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
                $file->move('member/gambar', $filename);
                $galeri->gambar = $filename;
            }
            $galeri->save();

            // $gambar = array();
            // // $galeri->keterangan = $request->keterangan;
            // if ($files = $request->file('gambar')) {
            //    foreach ($files as $file){
            //        $nama_gambar = md5(rand(1000, 100000));
            //        $ekstensi = strtolower($file->getClientOriginalExtension());
            //        $nama_lengkap_gambar = $nama_gambar.'.'.$ekstensi;
            //        $upload = 'member/gambar/';
            //        $gambar_url = $upload.$nama_lengkap_gambar;
            //        $file->move($upload, $nama_lengkap_gambar);
            //        $gambar[] = $gambar_url;
            //    }
            // }
            // Galeri::insert([
            //     'id_user' => Auth::user()->id,
            //     'gambar' =>implode('|', $gambar)
            // ]);

        toast('Berhasil Menambah Gambar','success');
        return redirect('berandaMember')->with('success');
    }

    public function hapus_gambar_member($id){
        $gambarGaleri = Galeri::find($id);
        $gambarGaleri->delete();

        toast('Berhasil Menghapus Gambar','success');
        return redirect()->back()->with('success');
    }

    public function iklan_member(Request $request){
        $iklankan = new IklanMember;
        $iklankan->id_user = Auth::user()->id;
        $iklankan->nama = $request->nama;
        $iklankan->nama_bank = $request->nama_bank;
        $iklankan->nomor_rekening = $request->nomor_rekening;
        $iklankan->status_konfirmasi = 0;
        $iklankan->expire_date = Carbon::now()->addDays(30);

        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/bukti_bayarIklan', $filename);
            $iklankan->bukti_bayar = $filename;
        }

        $iklankan->save();
        toast('Berhasil Mengajukan Iklankan Diri','success');
        return redirect('berandaMember')->with('success');
    }

    

    public function simpan_bukti(Request $request){
        $bayar = new Pembayaran;
        $bayar->id_user = Auth::user()->id;
        $bayar->nama = $request->nama;
        $bayar->nama_bank = $request->nama_bank;
        $bayar->nomor_rekening = $request->nomor_rekening;
        $bayar->pesan = $request->pesan;
        $bayar->status_konfirmasi = 0;

        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('member/bukti_bayar', $filename);
            $bayar->bukti_bayar = $filename;
        }

        $bayar->save();
        toast('Berhasil Melakukan Konfirmasi Pembayaran','success');
        return redirect('berandaMember')->with('success');
    }

    public function simpan_pengajuan_harga(Request $request){
        if($request->isMethod('post')){

            $tampilDaftarPengajuanHarga = PengajuanHarga::where([
                'id_penawar_user'=>Auth::user()->id,
            ])->count();
            
            $tampilTelahTerimaOrderan = DetailMember::where([
                'id_user'=>Auth::user()->id,
            ])->first();
            

            if($tampilTelahTerimaOrderan->telah_terima_orderan > 0) {
                toast('Anda Telah Menerima Pekerjaan', 'error');
                return redirect()->back()->with('error');
            }

            if($tampilDaftarPengajuanHarga >0){
                toast('Anda Telah Melakukan Pengajuan Penawaran Harga', 'error');
                return redirect()->back()->with('error');
            }

            $simpan_pengajuan = new PengajuanHarga;
            $simpan_pengajuan->id_proyek_penawaran = $request->input('id');
            $simpan_pengajuan->id_penawar_user = Auth::user()->id;
            $simpan_pengajuan->harga_penawar = $request->harga_penawar;
        
            if($request->hasFile('berkas_penawar')){
                $file = $request->file('berkas_penawar');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time(). '_'.'ID'.Auth::user()->id.'.'.$ekstensi;
                $file->move('member/berkas/penawaran', $filename);
                $simpan_pengajuan->berkas_penawar = $filename;
            }

            $simpan_pengajuan->save();
            DetailMember::where('id_user', Auth::user()->id)->update([
                'telah_terima_orderan'=>1,
            ]);
            toast('Berhasil Melakukan Penawaran Harga Proyek','success');
            return redirect('proyekPengajuan')->with('success');
    }
}

    public function simpan_harga_jasa(Request $request){
        DetailMember::where('id_user', Auth::user()->id)->update([
            'harga_jasa'=>$request->harga_jasa,
        ]);

        toast('Berhasil Memberikan Harga Jasa','success');
        return redirect('berandaMember')->with('success');
    }
}
