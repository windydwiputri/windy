<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosens extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = [
        'nidn',
        'nama',
        'alamat',
        'no_hp',
    ];
}
