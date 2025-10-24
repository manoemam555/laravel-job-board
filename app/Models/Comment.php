<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;
    use HasUuids;
     protected $primaryKey = "id";
    protected $keyType = 'string'; //UUID universal unique identifier
    public $incrementing = false;
    protected $table = "comments";
    protected $fillable = ['author','content','posts_id'] ;
    protected $guarded = ['id'];
    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
