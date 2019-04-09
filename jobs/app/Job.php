<?php

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';

    protected $fillable = ['id', 'name' , 'startTime' , 'finishTime'];


    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes(array(
            'startTime' => Carbon::now(),
            'finishTime' => Carbon::now()->addDays(1)
        ), true);
        parent::__construct($attributes);
    }

}
