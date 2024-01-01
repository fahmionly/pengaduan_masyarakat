<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user'); //membuat relasi tabel
    }
    public function pengaduan()
    {
        return $this->belongsTo('App\Models\Pengaduan', 'id_pengaduan');
    }
}
