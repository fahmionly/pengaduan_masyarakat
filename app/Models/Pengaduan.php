<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pangaduan';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
