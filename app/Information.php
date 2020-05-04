<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'code', 'date', 'title', 'number', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
