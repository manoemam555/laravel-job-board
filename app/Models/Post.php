<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;
    use HasFactory;
    protected $primaryKey = "id";
    protected $keyType = 'string'; //UUID universal unique identifier
    public $incrementing = false;
    protected $table="posts";
    protected $fillable=['title','author','body','published'];
    protected $guarded=['id'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
