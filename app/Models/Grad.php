<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klub;

class Grad extends Model
{
    use HasFactory;

    public function klubovi()
    {
        return $this->hasMany(Klub::class);
    }
}
