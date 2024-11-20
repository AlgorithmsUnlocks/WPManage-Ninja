<?php

use FluentCommunity\Modules\Course\Services\CourseHelper;

// Instantiate the class
$courseHelper = new CourseHelper();

// Get courses for the user
$userId = 1; // Replace with your desired user ID
$courses = $courseHelper->getUserCourses($userId);
