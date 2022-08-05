<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KdramaDetail extends Model
{
    use HasFactory;

    protected $fillable = ['kdrama_id', 'director', 'cast', 'genre', 'year'];

    public function kdrama() {
        return $this->belongsTo('App\Models\Kdrama');
    }
}
