<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHero extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'power', 'universe_id', 'gender'];

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}



