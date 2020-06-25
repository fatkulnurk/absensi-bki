<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'commercial_serial_number',
        'company_name',
        'address',
        'tax_total'
    ];
}
