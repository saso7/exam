<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'initDate',
        'endDate',
        'places',
        'id_city'
    ];
    public function cities()
    {   
        return $this->belongsTo(city::class);
    }
}
