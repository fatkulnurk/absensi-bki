<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'date', 'status', 'time_in', 'time_out'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
