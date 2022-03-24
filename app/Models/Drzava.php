<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;

class Drzava extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'glavni_grad',
        'broj_stanovnika',
    ];


    public function treneri()
    {
        return $this->hasMany(Trener::class);
    }
}
