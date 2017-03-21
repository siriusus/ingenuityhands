<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class JobRaw extends Model
{
    // table name
    protected $table = 'job_raw';

    // primary key
    protected $primaryKey = 'job_id';

    public function getRouteKeyName() {
    	return 'job_id';
    }

    public function jobCategory() {
    	return $this->belongsTo('App\Models\Job\JobCategory', 'job_category_id', 'job_category_id');
    }

    public function jobImages() {
    	return $this->belongstoMany('App\Models\Job\JobImage', 'join_jobs_and_images', 'job_id', 'job_image_id');
    }
}
