<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class JobImage extends Model
{
    // table name
    protected $table = 'job_image';

    // primary key
    protected $primaryKey = 'job_image_id';

    //disable timestamp
    public $timestamp = false;

    public function jobs() {
      return $this->belongstoMany('App\Models\Job\JobRaw', 'join_jobs_and_images', 'job_image_id', 'job_id');
    }
}
