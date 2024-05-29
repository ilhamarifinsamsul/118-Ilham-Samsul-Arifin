<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    public $table = 'tb_laporan';

    protected $fillable = [
        'user_id',
        'description',
        'date',
        'picture',
        'kategori_id',
    ];

    function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
