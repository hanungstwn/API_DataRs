<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = ['no_pasien','nama','alamat','tanggal_lahir','umur','status','diagnosa','jenis_kelamin','cluster','no_kamar'];
}
