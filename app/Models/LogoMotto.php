<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoMotto extends Model
{
    use HasFactory;

    protected $table = 'logo_&_motto';
    protected $fillable = ['img', 'description_logo', 'motto'];
}
