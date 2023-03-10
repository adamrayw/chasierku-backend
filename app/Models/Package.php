<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'price',
    ];

    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()) {
            return false;
        }

        return Checkout::wherePackageId($this->id)->whereUserId(Auth::user()->id)->exists();
    }
}