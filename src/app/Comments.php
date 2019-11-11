<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment','posts_id','user_id'
    ];

    public function post()
    {
        $this->belongsTo('App\Post');
    }

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
