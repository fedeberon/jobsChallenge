<?php

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = ['id', 'name' , 'startTime' , 'finishTime', 'status'];

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes(array(
            'startTime' => Carbon::now(),
            'finishTime' => Carbon::now()->addDays(1),
            'status' => 'START'
        ), true);

        parent::__construct($attributes);

    }


}
