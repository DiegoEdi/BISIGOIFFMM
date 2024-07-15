<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'incomes';

    protected $fillable = [
        'provider_id',
        'user_id',
        'receipt_type',
        'receipt_series',
        'receipt_number',
        'date',
        'tax',
        'total',
        'status',
    ];

    // Relación con el modelo user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Provider (Persona)
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
