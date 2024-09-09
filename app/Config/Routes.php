<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('login/mobile', 'Login::mobileLogin');
$routes->post('login/processMobileLogin', 'Login::processMobileLogin');

$routes->get('login/email', 'Login::emailLogin');
$routes->post('login/process_email_login', 'Login::processEmailLogin');
$routes->get('verify_mobile_otp/(:num)', 'Login::showVerifyMobileOTP/$1');
$routes->post('verify_mobile_otp/(:num)', 'Login::verifyMobileOTP/$1');

$routes->get('verify_email_otp/(:num)', 'Login::showVerifyEmailOTP/$1');
$routes->post('verify_email_otp/(:num)', 'Login::verifyEmailOTP/$1');
$routes->get('admin/dashboard', 'Admin::dashboard', ['filter' => 'adminAuth']);
$routes->post('admin/logout', 'Login::logout');
