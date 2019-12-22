<?php

namespace App\Http\Controllers;

use App\WorkSample;
use Illuminate\Http\Request;

class WorkSamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worksamples = WorkSample::latest()->get();
        return view('worksamples', [
            'worksamples' => $worksamples
        ]);
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
     * @param  \App\WorkSample  $workSample
     * @return \Illuminate\Http\Response
     */
    public function show(WorkSample $workSample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkSample  $workSample
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkSample $workSample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkSample  $workSample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkSample $workSample)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkSample  $workSample
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkSample $workSample)
    {
        //
    }
}
