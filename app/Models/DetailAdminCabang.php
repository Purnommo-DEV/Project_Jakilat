<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAdminCabang extends Model
{
    use HasFactory;

    protected $table = "detail_admin_cabang";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }

    public function wilayah()
    {
        return $this->belongsTo(Regency::class, 'wilayah_id','id');
    }
}
