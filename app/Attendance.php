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

    protected $appends = [
        'status_name'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function getDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function getStatusNameAttribute($value)
    {
        $result = '';
        switch ($this->status) {
            case 1:
                $result = 'Hadir';
                break;
            case 2:
                $result = 'Alpha';
                break;
            case 3:
                $result = 'Sakit';
                break;
            case 4:
                $result = 'Izin';
                break;
            default:
                $result = '-';
        }

        return $result;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
