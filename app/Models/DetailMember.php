<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailMember extends Model
{
    use HasFactory;

    protected $table = 'detail_member';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function wilayah()
    {
        return $this->belongsTo(Regency::class, 'wilayah_id', 'id');
    }

    public function relasi_keahlian()
    {
        return $this->belongsTo(Keahlian::class, 'keahlian', 'id');
    }
}
