<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_guru','mapel'
    ];

    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }
    // satu untuk banyak jadi buat id guru sama id kelas
    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
