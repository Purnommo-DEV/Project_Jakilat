<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\primaryController;
use App\Http\Controllers\tertiaryController;
use App\Http\Controllers\secondaryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BackEnd\LoginController;
use App\Http\Controllers\BackEnd\MemberController;
use App\Http\Controllers\BackEnd\CostumerController;
use App\Http\Controllers\BackEnd\RegisterController;
use App\Http\Controllers\SuperAdmin\KeahlianController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// primaryController
Route::get('/login',          [primaryController::class, 'login'])->name('login');    
Route::get('/loginAdmin',     [primaryController::class, 'login_admin'])->name('loginAdmin');
Route::get('/loginSuperAdmin',[primaryController::class, 'login_super_admin'])->name('loginSuperAdmin');
Route::get('/',               [primaryController::class, 'index'])->name('home');
Route::get('/gabungMember',   [primaryController::class, 'gabungMember'])->name('gabungMember');
Route::get('/gabungCustomer', [primaryController::class, 'gabungCustomer'])->name('gabungCustomer');
Route::get('/tentangKami',    [primaryController::class, 'tentangKami'])->name('tentangKami');
Route::get('/ketentuan',      [primaryController::class, 'ketentuan'])->name('ketentuan');
Route::get('/berandaUtama',   [primaryController::class, 'berandaUtama'])->name('berandaUtama');
Route::post('/logout',        [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'cekRole:Customer'])->group(function () {
    // secondaryController berisi tampilan cust
    Route::get('/beranda',                        [secondaryController::class, 'beranda'])->name('berandaCustomer');
    Route::get('/deskripsi',                      [secondaryController::class, 'deskripsi'])->name('deskripsi');
    Route::get('/tambahProyek',                   [secondaryController::class, 'tambahProyek'])->name('tambahProyek');
    Route::get('/buktiBayar',                     [secondaryController::class, 'buktiBayar'])->name('buktiBayar');
    Route::get('/detailProyekPengajuan/{id}',     [secondaryController::class, 'detailProyekPengajuan'])->name('detailProyekPengajuan');
    Route::get('/tambahProyekPengajuan',          [secondaryController::class, 'tambahProyekPengajuan'])->name('tambahProyekPengajuan');
    Route::get('/editBiodata/{id}',               [secondaryController::class, 'editBiodata'])->name('editBiodata');
    Route::get('/editProyek/{id}',                [secondaryController::class, 'editProyek'])->name('editProyek');
    Route::get('/profileMember/{id}',             [tertiaryController::class, 'profileMember'])->name('profileMember');
    Route::post('/updateProyek/{id}',             [CostumerController::class, 'update_proyek_pilih_jasa_rampung'])->name('updateProyekPilihJasa');
    Route::post('/updateBiodataCustomer/{id}',    [CostumerController::class, 'update_biodata_costumer'])->name('updateBiodataCostumer');
    Route::post('/simpanBuktiBayar',              [CostumerController::class, 'simpan_bukti_bayar'])->name('simpanBuktiBayarCustomer');
    Route::post('/simpanProyekPengajuan',         [CostumerController::class, 'simpan_proyek_pengajuan'])->name('simpanProyekPengajuan');
    Route::get('/hapusProyekPengajuan/{id}',      [CostumerController::class, 'hapus_proyek_pengajuan'])->name('hapusProyekPengajuan');
    Route::get('/hapusJasaPilihan/{id}',          [CostumerController::class, 'hapus_jasa_pilihan'])->name('hapusJasaPilihan');
    Route::post('/simpanProyekPilihJasa',         [CostumerController::class, 'simpan_proyek_pilih_jasa'])->name('simpanProyekPilihJasa');
    Route::get('/hapusProyekPilihJasa/{id}',      [CostumerController::class, 'hapus_proyek_pilih_jasa'])->name('hapusProyekPilihJasa');
    Route::post('/tambahMemberKeProyek',          [CostumerController::class, 'tambah_member_ke_proyek'])->name('tambahMemberKeProyek');
    Route::post('/ubahFotoDiriCustomer/{id}',     [CostumerController::class, 'update_foto_diri_customer'])->name('ubahFotoDiriCustomer');
});

Route::middleware(['auth', 'cekRole:Member'])->group(function () {
    // tertiaryController berisi tampilan member
    Route::get('/berandaMember',    [tertiaryController::class, 'berandaMember'])->name('berandaMember');
    Route::get('/iklan',            [tertiaryController::class, 'iklan'])->name('Iklan');
    Route::get('/proyekPengajuan',  [tertiaryController::class, 'proyekPengajuan'])->name('proyekPengajuan');
    Route::get('/buktiBayarMember', [tertiaryController::class, 'bukti_bayar'])->name('buktiBayarMember');

    Route::get('/terimaOrder/{id}/{siap_terima_order}', [MemberController::class, 'siap_terima_order'])->name('terimaOrder');
    Route::get('/editBiodataMember/{id}',               [MemberController::class, 'edit_biodata_member'])->name('editBiodataMember');
    Route::post('/updateBiodataMember/{id}',            [MemberController::class, 'update_biodata_member'])->name('updateBiodataMember');
    Route::post('/tambahGambar',                        [MemberController::class, 'tambah_gambar'])->name('tambahGambarMember');
    Route::get('/hapusGambarMember/{id}',               [MemberController::class, 'hapus_gambar_member'])->name('hapusGambarMember');
    Route::post('/iklankanMember',                      [MemberController::class, 'iklan_member'])->name('IklankanMember');
    Route::post('/simpanBukti',                         [MemberController::class, 'simpan_bukti'])->name('simpanBuktiBayar');
    Route::post('/pengajuanPenawaranHarga',             [MemberController::class, 'simpan_pengajuan_harga'])->name('PengajuanPenawaranHarga');
    Route::post('/masukkanHarga',                       [MemberController::class, 'simpan_harga_jasa'])->name('masukkanHarga');
    Route::post('/ubahFotoDiriMember/{id}',             [MemberController::class, 'update_foto_diri_member'])->name('ubahFotoDiriMember');
});

//---------------------------------------BACKEND---------------------------------------------------------
// REGISTER
Route::post('/saveMember',   [RegisterController::class, 'save_member'])->name('saveMember');
Route::post('/saveCustomer', [RegisterController::class, 'save_customer'])->name('saveCustomer');

// LOGIN
Route::post('/postLogin',    [LoginController::class, 'postlogin'])->name('postLogin');

Route::middleware(['auth', 'cekRole:Admin'])->group(function(){
    Route::get('/berandaAdmin',             [AdminController::class, 'berandaAdmin'])->name('berandaAdmin');
    Route::get('/profileAdmin/{id}',        [AdminController::class, 'profile_admin'])->name('ProfileAdmin');
    Route::get('/pembayaranIklan',[AdminController::class, 'pembayaran_iklan'])->name('PembayaranIklan');
    Route::get('/konfirmasiPembayaranIklan/{id}',  [AdminController::class, 'konfirmasi_pembayaran_iklan'])->name('KonfirmasiPembayaranIklan');
    Route::get('/pembayaran',     [AdminController::class, 'pembayaran'])->name('Pembayaran');
    Route::get('/konfirmasiPembayaran/{id}',     [AdminController::class, 'konfirmasi_pembayaran'])->name('KonfirmasiPembayaran');
});

Route::middleware(['auth', 'cekRole:SuperAdmin'])->group(function(){
    Route::get('/berandaSuperAdmin', [SuperAdminController::class, 'beranda_super_admin'])->name('berandaSuperAdmin');
    Route::get('/manajemenUser',     [SuperAdminController::class, 'manajemen_user'])->name('manajemenUser');

    Route::resource('/keahlian', KeahlianController::class);
});
