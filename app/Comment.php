<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'comment', 'created_at', 'updated_at'
    ];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';
}
