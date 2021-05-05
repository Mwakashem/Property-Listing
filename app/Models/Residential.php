<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residential extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class, 'foreign_key');

    }

    public function images()
    {
        return $this->hasMany(Images::class);
    }
}
