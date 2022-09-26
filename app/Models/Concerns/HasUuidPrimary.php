<?php

namespace App\Models\Concerns;

trait HasUuidPrimary
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $primaryKey = $model->getKeyName();
            if (! $model->{$primaryKey}) {
                $model->{$primaryKey} = \Str::orderedUuid()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
