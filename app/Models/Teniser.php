<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;

class Teniser extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'pozicija',
        'broj_titula',
    ];

    public function treneri()
    {
        return $this->hasMany(Trener::class);
    }
}
