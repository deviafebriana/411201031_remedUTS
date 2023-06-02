<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kode_lokasi', 'nama_lokasi'];
    protected $table = 'lokasi';
    public $timestamps = false;
}
