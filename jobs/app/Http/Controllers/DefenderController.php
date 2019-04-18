<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessJobs;
use App\Model\Defender;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Validator;


class DefenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
            }
            $defender = new Defender();
            $defender->name = $request->name;
            $defender->origin = $request->origin;
            $defender->mode = $request->mode;
            $defender->fullscan = $request->fullscan;
            $defender->delay = $request->delay;

            ProcessJobs::dispatch($defender)
                    ->onQueue('low');

        return $request->json(Response::HTTP_OK, $defender);
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
