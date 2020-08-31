<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocol extends Model
{
    //

    protected $fillable = [
        'nome', 'path', 'ext', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
