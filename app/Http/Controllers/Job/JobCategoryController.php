<?php

namespace App\Http\Controllers\Job;

use App\Models\Job\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return JobCategory::all();
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
     * @param  \App\Models\Job\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function show($jobCategoryId)
    {
        //
        return JobCategory::find($jobCategoryId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(JobCategory $jobCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobCategory $jobCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($jobCategoryId)
    {
        //
        $jobCategory = JobCategory::find($jobCategoryId);
        $jobCategory->is_active = 0;
        $jobCategory->save();
    }
}
