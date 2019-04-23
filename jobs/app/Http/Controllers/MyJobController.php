<?php

namespace App\Http\Controllers;

use App\Interfaces\JobService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyJobController extends Controller
{


    private $jobService;

    /**
     * MyJobController constructor.
     * @param $jobService
     */
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

        return response()->json($jobs, Response::HTTP_OK);
    }

    public function findByType(Request $request){
        $type = $request->type;
        $jobs = $this->jobService->findByType($type);

        return response()->json($jobs, Response::HTTP_OK);
    }

    public function findBetweenDateTimesAndType(Request $request){
        $from = Carbon::parse($request->fromDateTime);
        $to = Carbon::parse($request->toDateTime);
        $type = $request->type;
        $jobs = $this->jobService->findBetweenDateTimesAndType($from, $to, $type);

        return response()->json($jobs, Response::HTTP_OK);
    }
    public function findBetweenDateTimesAndTypeAndStatus(Request $request){
        $from = Carbon::parse($request->fromDateTime);
        $to = Carbon::parse($request->toDateTime);
        $type = $request->type;
        $status = $request->status;

        $jobs = $this->jobService->findBetweenDateTimesAndTypeAndStatus($from, $to, $type, $status);

        return response()->json($jobs, Response::HTTP_OK);
    }

    public function index()
    {
        //
        return response()->json('MyJobController Index!', Response::HTTP_OK );
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
