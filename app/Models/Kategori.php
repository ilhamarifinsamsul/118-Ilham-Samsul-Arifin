<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $table = 'tb_kategori_bencana';

    protected $fillable = [
        'nama_kategori'
    ];

    function Laporan()
    {
        return $this->hasMany(Laporan::class, 'kategori_id', 'id');
    }
}
