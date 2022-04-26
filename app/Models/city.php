<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nCitizens',
    ];
    public function casals()
    {
        return $this->hasMany(casal::class);
    }
}
