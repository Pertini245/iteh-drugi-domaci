<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grad;
use App\Models\Fudbaler;

class Klub extends Model
{
    use HasFactory;

    public function grad()
    {
        return $this->belongsTo(Grad::class);
    }

    public function fudbaleri()
    {
        return $this->hasMany(Fudbaler::class);
    }
}
