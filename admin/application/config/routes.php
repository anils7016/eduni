<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'dashboard';

// =====================================dashboard route=======================================

$route['dashboard'] = 'dashboard';

// =====================================dashboard route=======================================


// ===================================== start login route=======================================
$route['default_controller'] = 'login';
$route['login/authenticate'] = 'login/loginAuthenticate';
$route['login/logout'] = 'login/logout';

// ===================================== end login route=======================================

// =====================================course=======================================

$route['course-list'] = 'course/index';
$route['add-new-course'] = 'course/addNewCourse';
$route['saveCourse'] = 'course/saveCourse';
$route['getCourseList'] = 'course/getCourseList';

// =====================================course=======================================

// =====================================semester=======================================

$route['semester-list'] = 'semester/index';
$route['add-new-semester'] = 'semester/addNewSemester';
$route['saveSemester'] = 'semester/saveSemester';
$route['getSemesterList'] = 'semester/getSemesterList';
$route['semester/get_by_course/(:num)'] = 'semester/get_by_course/$1';

// =====================================semster=======================================


// =====================================subject=======================================

$route['subject-list'] = 'subject/index';
$route['add-new-subject'] = 'subject/addNewSubject';
$route['saveSubject'] = 'subject/saveSubject';
$route['getSubjectList'] = 'semester/getSubjectList';
$route['subject/get_subjects/(:num)'] = 'subject/get_subjects/$1';

// =====================================subject=======================================

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['(:any)'] = 'admin/check_login_random/$1';