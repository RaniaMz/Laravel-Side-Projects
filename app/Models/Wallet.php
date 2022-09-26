<?php

namespace App\Models;

use App\Models\Concerns\HasUuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory, HasUuidPrimary;

    protected $guarded = [];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
