<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
      protected $table = 'registers';
    protected $fillable = [
        'name',
        'rayon',
        'nis',
        'judul',
        'tenggat'
    ];
}
