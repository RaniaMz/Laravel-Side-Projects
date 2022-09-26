<?php

namespace App\Models;

use App\Models\Concerns\HasUuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory, HasUuidPrimary;

    protected $guarded = [];
}
