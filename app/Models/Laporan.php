<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    public $table = 'tb_laporan';

    protected $fillable = [
        'description',
        'date',
        'picture',
        'kategori_id',
    ];

    function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
