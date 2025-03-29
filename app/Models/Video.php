<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =['name',
        'department_id',
        'video_name',
        'level_id',
        'img',
        'specialcourse_id'
        ];

        public function department()
        {
            return $this->belongsTo(Department::class);
        }
        public function level()
        {
            return $this->belongsTo(Level::class);
        }
        public function specialcourse()
        {
            return $this->belongsTo(Level::class);
        }
}
