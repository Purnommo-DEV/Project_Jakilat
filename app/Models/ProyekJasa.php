<?php

namespace App\Models;

use App\Models\JasaDiPilih;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProyekJasa extends Model
{
    use HasFactory;

    protected $table = 'proyek_jasa';
    protected $guarded = [];
}
