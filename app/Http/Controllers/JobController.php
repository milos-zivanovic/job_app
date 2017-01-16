<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{

    //List of all job posts
    public function index() 
    {
        $jobs = Job::all();

        $data = array(
            'jobs' => $jobs,
        );
        return view('jobs/index', $data);
    }
    
}
