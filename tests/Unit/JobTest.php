<?php
use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA
    // Arange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        "employer_id" => $employer->id
    ]);
    // Action & Assert
    // Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function() {
    // AAA
    // Arange
    $job = Job::factory()->create();
    // Action
    $job->tag('Frontend');
    // Assert
    expect($job->tags)->toHaveCount(1);
});
