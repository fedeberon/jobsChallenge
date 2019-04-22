<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Http\Services\JobService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyJobController extends Controller
{
    /**
     * MyJobController constructor.
     */

    private $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function findBetweenDateTimes(Request $request){
        $from = Carbon::parse($request->fromDateTime);
        $to = Carbon::parse($request->toDateTime);

        $jobs = $this->jobService->findBetweenDateTimes($from, $to);

        return request()->json(200,$jobs);
    }

    public function findBetweenDateTimesAndType(Request $request){
        $from = Carbon::parse($request->fromDateTime);
        $to = Carbon::parse($request->toDateTime);
        $type = $request->type;

        $jobs = DB::table('jobs_events')->whereBetween('date', [$from, $to])->where('type',$type)->get();

        return request()->json(200,$jobs);
    }
    public function findBetweenDateTimesAndTypeAndStatus(Request $request){
        $from = Carbon::parse($request->fromDateTime);
        $to = Carbon::parse($request->toDateTime);
        $type = $request->type;
        $status = $request->status;

        $jobs = DB::table('jobs_events')->whereBetween('date', [$from, $to])->where('type',$type)->where('status',$status)->get();

        return request()->json(200,$jobs);
    }

    public function index()
    {
        //
        return response()->json('MyJobController Index!', 200 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
