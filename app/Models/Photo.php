<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'plant_id',
    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}