<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRegistration extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nrp',
        'ukm_id',
        'payment',
        'code',
        'drive_url',
        'file_validated',
        'payment_validated',
    ];
}
