<?php
/**
 * Created by IntelliJ IDEA.
 * User: federicoberon
 * Date: 14/04/2019
 * Time: 15:04
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

 class MyJob extends Model implements IJob{

    protected $table = "jobs_events";


    public $timestamps = false;

    const CREATED_AT = false;

    const UPDATED_AT = false;


     function getType()
     {
         // TODO: Implement getType() method.
     }

     function getSecondToProcess()
     {
         // TODO: Implement getSecondToProcess() method.
     }
 }
