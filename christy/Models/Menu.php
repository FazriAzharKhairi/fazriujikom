<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_makanan',
        'deskripsi',
        'harga',
        'image',
    ];

    protected $table = ('menus');
    public $timestamps;
    
}
