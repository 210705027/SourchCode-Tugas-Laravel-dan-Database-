<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_pengarang',
    ];
    public function buku()
    {
        return $this->hasMany(Buku::class);//OneToMany
    }

}
