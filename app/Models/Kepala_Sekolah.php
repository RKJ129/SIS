<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepala_Sekolah extends Model
{
    use HasFactory;
    protected $table = 'kepala_sekolah';
    protected $fillable = ['name', 'img', 'description'];
}
