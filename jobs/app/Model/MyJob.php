<?php
/**
 * Created by IntelliJ IDEA.
 * User: federicoberon
 * Date: 14/04/2019
 * Time: 15:04
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

abstract class MyJob extends Model{

    protected $table = "jobs_events";

    abstract function getType();

    abstract function getSecondToProcess();

    public $timestamps = false;

    const CREATED_AT = false;

    const UPDATED_AT = false;



}
