<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JasaDiPilih extends Model
{
    use HasFactory;

    protected $table = "jasa_dipilih";
    protected $guarded = [];

    public function user(){
       return $this->belongsTo(User::class, 'id_user_jasa', 'id');
    }

    public function userDetail(){
        return $this->belongsTo(DetailMember::class,'id_user_jasa','id_user');
    }

    public function proyekDetail(){
        return $this->BelongsTo(ProyekJasa::class, 'id_proyek_jasa', 'id');
    }
}
