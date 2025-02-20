<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    // protected $fillable = ['']; //kolom yang boleh diisi
    // protected $guarded = ['']; //kolom yang tidak boleh disi

    protected $fillable = ['nama', 'id_kategori'];
}
