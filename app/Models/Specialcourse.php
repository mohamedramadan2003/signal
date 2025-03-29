<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialcourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','img','review'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
