<?php

namespace DesignPatterns\Behavioral\Observer\JobExample;

use DesignPatterns\Behavioral\Observer\JobExample\JobPost;
use DesignPatterns\Behavioral\Observer\JobExample\JobSeeker;
use DesignPatterns\Behavioral\Observer\JobExample\EmploymentAgency;

require "../../../../vendor/autoload.php";

// Create subscribers
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Create publisher and attach subscribers
$jobPostings = new EmploymentAgency();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Add a new job and see if subscribers get notified
$jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer