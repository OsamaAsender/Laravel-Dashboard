<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount',
        'discount_type',
        'usage_limit',
        'used',
        'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function isValid()
    {
        // Check if coupon is expired
        if ($this->expires_at && now()->gt($this->expires_at)) {
            return false;
        }

        // Check if usage limit is reached
        if ($this->usage_limit !== null && $this->used >= $this->usage_limit) {
            return false;
        }

        return true;
    }
}