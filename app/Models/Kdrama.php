<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kdrama extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'episodes'];

    public function kdrama_details() {
        return $this->hasMany('App\Models\KdramaDetail');
    }
}
