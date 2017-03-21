<?php

namespace App\Http\Controllers\Job;

use App\Models\Job\JobRaw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobRawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return JobRaw::all();
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
     * @param  \App\Models\Job\JobRaw  $jobRaw
     * @return \Illuminate\Http\Response
     */
    public function show($jobId)
    {
        //
        return JobRaw::find($jobId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job\JobRaw  $jobRaw
     * @return \Illuminate\Http\Response
     */
    public function edit(JobRaw $jobRaw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job\JobRaw  $jobRaw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobRaw $jobRaw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job\JobRaw  $jobRaw
     * @return \Illuminate\Http\Response
     */
    public function destroy($jobId)
    {
        //
        $job = JobRaw::find($jobId);
        $job->is_closed = 1;
        $job->save();
    }
}
