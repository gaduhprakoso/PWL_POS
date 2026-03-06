<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    // Pastikan nama tabel sesuai dengan di database (contoh: m_level)
    protected $table = 'm_level'; 
    protected $primaryKey = 'level_id'; 

    protected $fillable = ['level_kode', 'level_nama'];
}