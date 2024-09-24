<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function course(){
        return $this->belongsTo(Courses::class);
    }
    use HasFactory;
}
