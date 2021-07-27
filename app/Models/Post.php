<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $fillable=['title', 'body', 'user_id'];
    //per una questione di restrizioni su store PostController
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
