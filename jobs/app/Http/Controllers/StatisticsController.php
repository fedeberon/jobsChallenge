<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\JobService;

class StatisticsController extends Controller
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

    public function totalJobs(){
        $totalJobs = $this->jobService->totalJobs();
        $processJobs = $this->jobService->jobsProcess();
        $finishJobs = $this->jobService->jobsFinish();
        $defenderJobs = $this->jobService->defenderJobs();
        $operativeJobs = $this->jobService->operativeJobs();
        $inQueueJobs = $this->jobService->inQueueJobs();
        return view("statistics", ['totalJobs' => $totalJobs , "processJobs" => $processJobs , "finishJobs" => $finishJobs , "defenderJobs" =>$defenderJobs , "operativeJobs" =>$operativeJobs , "inQueueJobs" => $inQueueJobs]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('statistics');
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
