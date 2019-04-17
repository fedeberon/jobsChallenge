<?php

namespace App\Model;

class Operative extends MyJob
{
    //

    private static $TYPE = 'OPERATIVE';

    protected $fillable = ['name', 'origin','duration', 'mode'];

    function getType()
    {
        return Operative::$TYPE;
    }

    protected $defaults = array(
        'origin' => "not specified",
        'mode' => "under"
    );

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes($this->defaults, true);
        parent::__construct($attributes);
    }

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

    function getSecondToProcess()
    {
        if(is_null($this->duration)){
            $this->duration = ($this->mode == "main") ? 5 : 15 ;
        }
        return $this->duration;
    }
}
