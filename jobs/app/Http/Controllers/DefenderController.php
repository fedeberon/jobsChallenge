<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessJobs;
use App\Model\Defender;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DefenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function findBetweenDateTimes(Request $request){
        $from = Carbon::parse($request->fromDateTime);
        $to = Carbon::parse($request->toDateTime);

        $job = Defender::whereBetween('start', [$from, $to])->get();

        request()->json($job , 200);
    }


    public function index()
    {
        //
        return response()->json('Defender Index!', 200 );
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

        $defender = new Defender;

        $defender->name = $request->name;

        ProcessJobs::dispatch($defender)
            ->onQueue('low')
            ->delay(now()->addSeconds($defender->getSecondToProcess()));

        return $request->json('200','Job Defender was fire.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Defender  $defender
     * @return \Illuminate\Http\Response
     */
    public function show(Defender $defender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Defender  $defender
     * @return \Illuminate\Http\Response
     */
    public function edit(Defender $defender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Defender  $defender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Defender $defender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Defender  $defender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defender $defender)
    {
        //
    }
}
