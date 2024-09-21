<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;         #We dont want this after we copied that function to Job.php
use App\Models\Job;


Route::get('/', function () {
    return view('home',[
        'greeting'=> 'Hey',
        'name' => 'Rajesh'
    ]);
});



Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(3);
    return view('jobs',['jobs'=>$jobs
    ]);
});



Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job',['job'=> $job]);
});


Route::get('/contact', function () {
    return view('contact');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
?>
