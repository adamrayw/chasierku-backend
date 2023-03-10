<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'payment_status',
        'midtrans_url',
        'midtrans_booking_code',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Package()
    {
        return $this->belongsTo(Package::class);
    }
}