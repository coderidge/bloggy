<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title','body'
        ];

    public function showComments()
    {
        return $this->hasMany(Comments::class);
    }

    public function blogComments()
    {
        return $this->hasMany(Comments::class);
    }
}
