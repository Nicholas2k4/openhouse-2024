<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $table = 'ukm';

    protected $fillable= [
        ''
    ];

    use HasFactory, HasUuids;

}
