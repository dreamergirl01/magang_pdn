<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $fillable = [
        'matakuliah',
        'ruangan',
        'dosen_pengampu',
        'foto'
    ];

}
