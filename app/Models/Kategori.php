<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Kategori extends Model
{
    use HasFactory;
    
    protected $table = 'kategori'; //ini ditambahkan saat tidak jamak dengan bahasa ingrris

    protected $guarded = [];

    public function barang(){
        return $this->belongsToMany(Barang::class);
    }
}
