<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $fillable = ['title','alias','body'];
    protected $guarded=['status'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        $this->comments()->create(compact('body'));
    }

}
