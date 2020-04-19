<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalQualifications extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'name', 'year'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
