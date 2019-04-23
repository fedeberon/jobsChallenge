<?php

namespace App\Http\Controllers;

use App\Interfaces\JobService;
use App\Model\Defender;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Validator;


class DefenderController extends Controller
{


    private $jobService;

    /**
     * DefenderController constructor.
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
            'name' => 'required',
            'delay' => 'sometimes|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        }

        $defender = new Defender();
        $defender->name = $request->name;
        $defender->delay = $request->delay;
        if($request->fullscan != null ) $defender->fullscan = $request->fullscan;

        $this->jobService->saveAndProcess($defender);


        return $request->json(Response::HTTP_OK, $defender);
    }

    /**
     * Display the specified resource.
     *
     * @param Defender $defender
     * @return \Illuminate\Http\Response
     */
    public function show(Defender $defender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Defender $defender
     * @return \Illuminate\Http\Response
     */
    public function edit(Defender $defender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Defender $defender
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
