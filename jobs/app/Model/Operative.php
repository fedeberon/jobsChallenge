<?php

namespace App\Model;

use App\Job;

class Operative extends Job
{
    //

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('operative', function (Builder $builder) {
            $builder->where('type', 'operative');
        });

        static::creating(function ($article) {
            $article->type = 'operative';
        });
    }

}
