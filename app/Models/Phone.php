<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama_hp',
         'brand',
          'harga_per_hari',
           'status',
    ];
}
