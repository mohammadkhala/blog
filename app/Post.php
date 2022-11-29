<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable=['user_id','title','content','photo','slug'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    public function tag()
    {
        return $this->belongsToMany(tag::class);
    }
}
