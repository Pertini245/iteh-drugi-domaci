<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klub;

class Fudbaler extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'brojDres',
        'klub_id'
    ];

    public function klub()
    {
        return $this->belongsTo(Klub::class);
    }
}
