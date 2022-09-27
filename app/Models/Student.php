<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'student_id', 'id');
    }

    public function savings()
    {
        return $this->hasMany(Saving::class, 'student_id', 'id');
    }
}
