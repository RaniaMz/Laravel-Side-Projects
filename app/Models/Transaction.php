<?php

namespace App\Models;

use App\Models\Concerns\HasUuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, HasUuidPrimary;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
