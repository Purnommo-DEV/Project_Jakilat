<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use App\Models\DetailUser;
use App\Models\Pembayaran;
use App\Models\ProyekJasa;
use App\Models\JasaDiPilih;
use Illuminate\Support\Str;
use App\Models\DetailMember;
use Illuminate\Http\Request;
use App\Models\DetailCustomer;
use App\Models\RiwayatPekerjaan;
use App\Http\Requests\InputRequest;
use App\Http\Controllers\Controller;
use App\Models\ProyekPenawaranHarga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\InputRequestProyek;
use Illuminate\Support\Facades\Validator;

class CostumerController extends Controller
{
        public function edit_biodata_costumer($id){
            $dataCostumer = DetailCustomer::where('id_user',$id)->first();
            return view('tertiary.editBiodata',compact('dataCostumer'));
        }
    
        public function update_biodata_costumer(Request $request, $id)
        {
            $detailDataCostumer = DetailCustomer::where('id_user',$id)->first();
            $detailDataCostumer->alamat = $request->alamat;
            $detailDataCostumer->nomor_hp = $request->nomor_hp;
            $detailDataCostumer->wilayah_id = $request->wilayah_id;
            $detailDataCostumer->save();

            $dataCostumer = User::find($id);
            $dataCostumer->email = $request->email;
            $dataCostumer->name = $request->name;
            $dataCostumer->password = Hash::make($request->password);
            $dataCostumer->save();

            toast('Berhasil Mengubah Biodata','success');
            return redirect()->route('berandaCustomer')->with('success');
        }

        public function update_foto_diri_customer(Request $request, $id){
            $detailCustomer = DetailCustomer::where('id_user', $id)->first();

            if ($request->hasFile('foto_diri')) {
                $path_foto_diri = 'customer/foto_diri' . $detailCustomer->foto_diri;
                if (File::exists($path_foto_diri)) {
                    File::delete($path_foto_diri);
                }
                $file = $request->file('foto_diri');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time(). '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
                $file->move('customer/foto_diri', $filename);
                // Image::make($file->getRealPath())->resize(500, 500)->save($path);
                $detailCustomer->foto_diri = $filename;
            }
            $detailCustomer->save();
            toast('Berhasil Melakukan Perubahan Foto Profil','success');
            return redirect()->back()->with('success');
        }

        public function simpan_bukti_bayar(Request $request){
            $bayar = new Pembayaran;
            $bayar->id_user = Auth::user()->id;
            $bayar->nama = $request->nama;
            $bayar->nama_bank = $request->nama_bank;
            $bayar->nomor_rekening = $request->nomor_rekening;
            $bayar->pesan = $request->pesan;
    
            if ($request->hasFile('bukti_bayar')) {
                $file = $request->file('bukti_bayar');
                $ekstensi = $file->getClientOriginalExtension();
                $filename = time() . '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
                $file->move('customer/bukti_bayar', $filename);
                $bayar->bukti_bayar = $filename;
            }
    
            $bayar->save();
            toast('Berhasil Melakukan Konfirmasi Pembayaran','success');
            return redirect()->route('berandaCustomer')->with('success');
        }

        public function simpan_proyek_pengajuan(InputRequestProyek $request){
            
            $saveProyek = new ProyekPenawaranHarga;
            $saveProyek->id_user = Auth::user()->id;
            $saveProyek->nama_proyek  = $request->nama_proyek;
            $saveProyek->batas_penerimaan  = $request->batas_penerimaan;
            $saveProyek->lokasi_proyek  = $request->lokasi_proyek;
            $saveProyek->harga_pembukaan = $request->harga_pembukaan;
            
            $file = $request->file('berkas');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time() . '_' .'ID'.Auth::user()->id .'.' . $ekstensi;
            $file->move('customer/berkas', $filename);
            $saveProyek->berkas = $filename;

            $saveProyek->deskripsi = $request->deskripsi;
            $saveProyek->status  = 0;
            $saveProyek->save();

            toast('Berhasil Melakukan Pengajuan Proyek Harga','success');
            return redirect()->route('berandaCustomer')->with('success');
        }

        public function hapus_proyek_pengajuan($id){
            $hapusPengajuanHarga = ProyekPenawaranHarga::where('id', $id);
            $hapusPengajuanHarga->delete();
            toast('Berhasil Mengahpus Data','success');
            return redirect()->route('berandaCustomer')->with('success');
        }

        public function simpan_proyek_pilih_jasa(Request $request){

            $data = $request->all();
            // dd($data);

            $saveProyekJasa = new ProyekJasa;
            $saveProyekJasa->id_user = Auth::user()->id;
            $saveProyekJasa->nama_proyek  = $data['nama_proyek'];
            $saveProyekJasa->alamat_proyek  = $data['alamat_proyek'];
            $saveProyekJasa->status = "Draf";
            $saveProyekJasa->save();
            
            // foreach($request->id_user_jasa as $key=>$id_user_jasa){
            //     $saveJasaDipilih = new JasaDiPilih();
            //     $saveJasaDipilih->id_proyek_jasa = $saveProyekJasa->id; 
            //     $saveJasaDipilih->id_user_jasa = $request->id_user_jasa[$key];
            //     $saveJasaDipilih->save();
            
            //     DetailMember::where('id_user', $request->id_user_jasa[$key])->update([
            //         // dd($request->id_user_jasa[$key]),
            //         'telah_terima_orderan' => 1,
            //     ]);
            // }
            toast('Berhasil Melakukan Pengajuan Proyek Jasa','success');
            return redirect()->route('berandaCustomer')->with('success');
        }

        public function hapus_proyek_pilih_jasa($id){
            $hapusPengajuanHarga = ProyekPenawaranHarga::where('id', $id);
            $hapusPengajuanHarga->delete();
            toast('Berhasil Mengahpus Data','success');
            return redirect()->route('berandaCustomer')->with('success');
        }

        public function hapus_jasa_pilihan($id){
            $JasaDiPilih = JasaDiPilih::find($id);
            
            DetailMember::where('id_user', $JasaDiPilih->id_user_jasa)->update([
                'telah_terima_orderan' => 0,
            ]);
            
            $JasaDiPilih->delete();
            
            toast('Berhasil Mengahpus Data','success');
            return redirect()->back()->with('success');
        }

        public function tambah_member_ke_proyek (Request $request){

            if($request->isMethod('post')){
                $data = $request->all();

                $tampilJasaPilihan = JasaDiPilih::where([
                    'id_proyek_jasa'=>$data['id_proyek_jasa'], 
                    'id_user_jasa'=>$data['id_user_jasa']
                    ])->count();
                    // dd($tampilJasaPilihan);
                    
                if($tampilJasaPilihan > 0){
                    toast('Tukang telah ada di Proyek Anda', 'error');
                    return redirect()->back()->with('error');
                }
                $simpanMember = new JasaDiPilih;
                $simpanMember->id_proyek_jasa = $data['id_proyek_jasa'];
                $simpanMember->id_user_jasa = $data['id_user_jasa'];
                $simpanMember->save();

                DetailMember::where('id_user', $data['id_user_jasa'])->update([
                    // dd($request->id_user_jasa[$key]),
                    'telah_terima_orderan' => 1,
                ]);

                toast('Berhasil Menambahkan Member ke Proyek', 'success');
                return redirect()->back()->with('success');
            }

            // $simpanMember = new JasaDiPilih();
            // $simpanMember->id_proyek_jasa = $request->id_proyek_jasa;
            // $simpanMember->id_user_jasa = $request->id_user_jasa;
            // $simpanMember->save();
            
            // $jasaDiPilih = JasaDiPilih::get();
        
            // foreach ($jasaDiPilih as $telahDiPilih)
            
            // if($request->id_proyek_jasa = $telahDiPilih->id_proyek_jasa)
            // {
            //     if($request->id_user_jasa = $telahDiPilih->id_user_jasa){
            //         toast('Tukang telah ada di Proyek Anda', 'error');
            //         return redirect()->back()->with('error');
            //     }
            // }else{
            //     toast('Berhasil Menambahkan Member ke Proyek', 'success');
            //     return redirect()->back()->with('success');
            // }

            // if($request->isMethod('post')){
            //     $data = $request->all();
                
            //     $tampilStokProduk = ProdukAtribut::where([
            //         'produk_id'=>$data['produk_id'], 
            //         'ukuran'=>$data['ukuran']
            //         ])->first()->toArray();
            //     if($tampilStokProduk['stok'] < $data['kuantitas']){
            //         $pesan = "Stok Melebihi Batas";
            //         session::flash('error_message', $pesan);
            //         return redirect()->back();
            //     }
            //     $session_id = Session::get('session_id');
            //     if(empty($session_id)){
            //         $session_id = Session::getId();
            //         Session::put('session_id', $session_id);
            //     }
            //     $hitungProduk = Keranjang::where([
            //         'produk_id'=>$data['produk_id'],
            //         'ukuran'=>$data['ukuran']])->count();
            //     if($hitungProduk>0){
            //         $message = "Produk Telah ada di Keranjang";
            //         session::flash('error_message', $message);
            //         return redirect()->back();
            //     }
            //     $keranjang = new Keranjang;
            //     $keranjang->user_id = $data['user_id'];
            //     $keranjang->session_id = $session_id;
            //     $keranjang->produk_id = $data['produk_id'];
            //     $keranjang->ukuran = $data['ukuran'];
            //     $keranjang->harga = $data['harga'];
            //     $keranjang->kuantitas = $data['kuantitas'];
            //     $keranjang->save();
    
            //     $message = "Produk Berhasil di Tambahkan ke Keranjang";
            //     session::flash('success_message', $message);
            //     return redirect()->back();
            // }
        }

        public function update_proyek_pilih_jasa_rampung(Request $request, $id){


            ProyekJasa::where('id', $id)->update([
                'status' => 'Selesai',
            ]);
            
            $tampil = JasaDiPilih::where('id_proyek_jasa', $id)->get();
            // dd($tampil->id_proyek_jasa);
            
            // foreach($tampil as $tampils)
            // dd($tampils->id_proyek_jasa);
            // dd($tampils->id_user_jasa);

            foreach($request->id_user_jasa as $key=>$id_user_jasa){
                // dd($request->id_user_jasa);

                DetailMember::where('id_user', $request->id_user_jasa[$key])->update([
                    // dd($request->id_user_jasa[$key]),
                    'telah_terima_orderan' => 0,
                ]);

                $saveRiwayat = new RiwayatPekerjaan();
                $saveRiwayat->id_proyek_jasa = $id;
                $saveRiwayat->id_user_jasa = $request->id_user_jasa[$key];
                $saveRiwayat->save();

                JasaDiPilih::where('id_proyek_jasa', $id)->delete();

            }
            toast('Berhasil Melakukan Pengajuan Proyek Jasa','success');
            return redirect()->route('berandaCustomer')->with('success');
        }
        
}
