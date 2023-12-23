<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProyekPenawaranHarga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanHarga extends Model
{
    use HasFactory;

    protected $table = "pengajuan_harga";
    protected $guarded = [];

    public function userPenawar(){
        return $this->belongsTo(User::class, 'id_penawar_user', 'id');
    }

    public function proyekTawaran(){
        return $this->belongsTo(ProyekPenawaranHarga::class,'id_proyek_penawaran', 'id');
    }
}
