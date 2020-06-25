<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpkPo extends Model
{
    use SoftDeletes;

    protected $table = 'spk_po';
    protected $fillable = [
        'spn_number',
        'job_name',
        'location',
        'owner',
        'company_name',
        'user_id' // inspektor
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function spi()
    {
        return $this->hasOne(Spi::class);
    }
}
