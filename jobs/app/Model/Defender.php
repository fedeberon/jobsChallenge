<?php

namespace App\Model;

use App\Job;

class Defender extends Job
{
    //


    public function __construct(array $attributes = array())
    {
        array_merge ($this->fillable, array(
            'MALWARE'
        ));

        $this->setRawAttributes(array(
            'MALWARE' => 'NO',
        ), true);

        parent::__construct($attributes);
    }


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
