<?php

$slug = '';
$queried_id = get_queried_object_id();

if ($queried_id) {
    $slug = (string) get_post_field('post_name', $queried_id);
}

$page_map = [
    'about' => 'about.php',
    'admin-dashboard' => 'admin-dashboard.php',
    'bmi-calculator' => 'bmi-calculator.php',
    'contact' => 'contact.php',
    'course-detail' => 'course-detail.php',
    'courses' => 'courses.php',
    'dashboard' => 'dashboard.php',
    'login' => 'login.php',
    'membership' => 'membership.php',
    'notifications' => 'notifications.php',
    'profile' => 'profile.php',
    'register' => 'register.php',
    'staff-dashboard' => 'staff-dashboard.php',
    'trainer-dashboard' => 'trainer-dashboard.php',
    'workout-plan' => 'workout-plan.php',
];

$template = $page_map[$slug] ?? 'index.php';
$file = __DIR__ . DIRECTORY_SEPARATOR . $template;

if (is_file($file)) {
    require $file;
    return;
}

status_header(404);
nocache_headers();
echo 'Not Found';

