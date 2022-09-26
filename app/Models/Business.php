<?php

namespace App\Models;

use App\Models\Concerns\HasUuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory, HasUuidPrimary;

    protected $casts = [];

    public $timestamps = true;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
