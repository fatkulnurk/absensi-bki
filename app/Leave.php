<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leave extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'name', 'position', 'year', 'long', 'status',
        'start_date', 'end_date', 'work_at', 'substitute', 'excuse'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
