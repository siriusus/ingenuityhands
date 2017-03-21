<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    //table name
    protected $table = 'job_category';

    // primary key
    protected $primaryKey = 'job_category_id';

    //disable timestamp
    public $timestamp = false;

    public function jobs() {
    	return $this->hasMany('App\Models\Job\JobRaw', 'job_category_id', 'job_category_id');
    }
}
