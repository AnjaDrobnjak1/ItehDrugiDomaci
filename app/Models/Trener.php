<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drzava;
use App\Models\Teniser;

class Trener extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'drzava_id',
        'teniser_id',
    ];


    public function drzava()
    {
        return $this->belongsTo(Drzava::class);
    }

    public function teniser()
    {
        return $this->belongsTo(Teniser::class);
    }
}
