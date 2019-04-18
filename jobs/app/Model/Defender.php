<?php

namespace App\Model;

class Defender extends MyJob
{

    public static $TYPE = 'DEFENDER';
    protected $fillable = ['fullscan'];
    protected $defaults = array(
        'fullscan' => false,
        'type' => 'defender',
    );

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes($this->defaults, true);
        parent::__construct($attributes);
    }

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope('defender', function (Builder $builder) {
//            $builder->where('type', 'defender');
//        });
//
//        static::creating(function ($article) {
//            $article->type = 'defender';
//        });
//    }


    function getType()
    {
        return Defender::$TYPE;
    }

    function getSecondToProcess()
    {
        if(is_null($this->delay)){
            $this->delay= $this->fullscan ? 5 : 10 ;
        }
        return $this->delay;
    }
}
