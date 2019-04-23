<?php

namespace App\Http\Controllers;

use App\Interfaces\JobService;
use App\Model\Operative;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Validator;

class OperativeController extends Controller
{

    private $jobService;

    /**
     * OperativeController constructor.
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
        return response()->json('Operative Index!', 200 );
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

        $operative = new Operative();
        $operative->name = $request->name;
        $operative->delay = $request->delay;
        if($request->mode != null ) $operative->mode = $request->mode;
        if($request->origin != null ) $operative->origin = $request->origin;

        $this->jobService->saveAndProcess($operative);


        return $request->json(Response::HTTP_ACCEPTED,$operative);
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
