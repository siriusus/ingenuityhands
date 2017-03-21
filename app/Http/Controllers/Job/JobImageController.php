<?php

namespace App\Http\Controllers\Job;

use App\Models\Job\JobRaw;
use App\Models\Job\JobImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jobId)
    {
        //
        return JobRaw::find($jobId)->jobImages;
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
     * @param  \App\Models\Job\JobImage  $jobImage
     * @return \Illuminate\Http\Response
     */
    public function show($jobId, $jobImageId)
    {
        //

        return JobRaw::find($jobId)->jobImages()->find($jobImageId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job\JobImage  $jobImage
     * @return \Illuminate\Http\Response
     */
    public function edit(JobImage $jobImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job\JobImage  $jobImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobImage $jobImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job\JobImage  $jobImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($jobId, $jobImageId)
    {
        //
        JobRaw::find($jobId)->jobImages()->detach($jobImageId);
    }
}
