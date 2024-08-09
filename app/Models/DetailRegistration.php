<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class DetailRegistration extends Model
{
    use HasFactory;

    // UUID as primary key
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'detail_registrations';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Uuid::uuid4();
        });
    }

    // Fillable fields
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
