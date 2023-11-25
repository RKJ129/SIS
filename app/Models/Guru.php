<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'name', 'nip', 'jenis_kelamin',
        'tempat_lahir', 'tgl_lahir', 'alamat',
        'jabatan', 'img'
    ];
}
