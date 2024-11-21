<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobResource;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function __invoke() {
        
        $jobs = Job::query()
                    ->with(['employer', 'tags'])
                    ->where('title' ,'LIKE', '%'.request('q').'%')
                    ->get();
        // return response()->json(
        //     $jobs,200);
        
        
        return view('jobs.search', [
            "jobs" => $jobs
        ]);
    }
}
