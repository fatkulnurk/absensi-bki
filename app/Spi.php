<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spi extends Model
{
    use SoftDeletes;

    protected $table = 'spi';
    protected $fillable = [
        'project_name',
        'company_name',
        'phone_number',
        'job_description',
        'start_date',
        'finish_date',
        'spk_po_id'
    ];

    public function spkPo()
    {
        return $this->belongsTo(SpkPo::class);
    }
}
