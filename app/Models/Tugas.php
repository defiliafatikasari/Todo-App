<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    // protected $fillable = ['']; //kolom yang boleh diisi
    // protected $guarded = ['']; //kolom yang tidak boleh disi

    protected $fillable = ['nama', 'id_kategoris'];

    // Relasi: 1 tugas memiliki 1 kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategoris', 'id');
    }
}
