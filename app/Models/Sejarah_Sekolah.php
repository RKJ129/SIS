<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah_Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sejarah_sekolah';
    protected $fillable = ['sejarah'];
}
