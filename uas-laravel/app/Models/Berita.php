<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    protected $table = 'berita';

    public function kategori(){
        return $this->belongsTo(kategori::class,'id_kategori','id');
    }
    
}
