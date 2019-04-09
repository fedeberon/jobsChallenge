<?php

namespace App\Model;

use App\Job;

class Defender extends Job
{
    //

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('defender', function (Builder $builder) {
            $builder->where('type', 'defender');
        });

        static::creating(function ($article) {
            $article->type = 'defender';
        });
    }
}
