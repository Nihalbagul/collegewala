<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/login', 'AuthController::loginPost');
$routes->post('/auth/register', 'AuthController::registerPost');

$routes->get('/colleges', 'CollegeController::index');
$routes->get('/colleges/add', 'CollegeController::addCollege');
$routes->post('/colleges/add', 'CollegeController::saveCollege');

$routes->get('/categories', 'CategoryController::index');
$routes->get('/categories/add', 'CategoryController::addCategory');
$routes->post('/categories/add', 'CategoryController::saveCategory');

$routes->get('/courses', 'CourseController::index');
$routes->get('/courses/add', 'CourseController::addCourse');
$routes->post('/courses/add', 'CourseController::saveCourse');

$routes->get('/scholarships', 'ScholarshipController::index');
$routes->get('/scholarships/add', 'ScholarshipController::addScholarship');
$routes->post('/scholarships/add', 'ScholarshipController::saveScholarship');
