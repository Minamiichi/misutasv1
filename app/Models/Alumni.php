<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnus';
    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
