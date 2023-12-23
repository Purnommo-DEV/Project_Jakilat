<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailCustomer extends Model
{
    use HasFactory;

    protected $table = 'detail_customer';
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
