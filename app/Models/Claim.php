<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'product_serial',
        'contact_email',
        'defect_details',
        'urgency_level',
    ];
}
