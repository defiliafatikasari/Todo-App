<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris'; // Pastikan sesuai dengan nama tabel di database
    protected $guarded = ['id'];

    // Relasi: 1 kategori memiliki banyak tugas
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'id_kategoris', 'id');
    }
}
