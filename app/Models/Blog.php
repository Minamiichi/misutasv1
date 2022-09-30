<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    protected $table = 'blogs';

    public function galleries(){
        return $this->hasMany(BlogGallery::class, 'blogs_id', 'id');
    }

}
