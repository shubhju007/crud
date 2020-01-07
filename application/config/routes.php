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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'Home_Controller';
$route['home/saveuser'] = 'Home_Controller/saveUser';
$route['home/deleteuser/(:num)'] = 'Home_Controller/deleteuser/$1';
$route['login'] = 'Login_Controller/login';
$route['logout'] = 'Login_Controller/logout';
$route['home/verifylogin'] = 'Login_Controller/verifyLogin';
$route['forgot-password'] = 'Login_Controller/forgotPasswordView';
$route['forgot-password-send-mail'] = 'Login_Controller/forgotPasswordSendMail';
$route['verifyFPLink/(:any)/(:num)'] = 'Login_Controller/verifyFPLink/$1/$2';
$route['save-new-password'] = 'Login_Controller/saveNewPassword';

$route['home/updateuser'] = 'Home_Controller/updateUser';
$route['home/editview/(:num)'] = 'Home_Controller/editView/$1';
$route['test'] = 'Test_Controller';
$route['test/storeuser'] = 'Test_Controller/storeUser';
$route['home/geteditview'] = 'Home_Controller/geteditview';
$route['home/editview/(:num)'] = 'Home_Controller/editView/$1';
$route['priyanka'] = 'Priyanka_Controller';
$route['priyanka/storeData'] = 'Priyanka_Controller/storeData';
$route['priyanka/editViewp/(:num)'] = 'Priyanka_Controller/editViewp/$1';
$route['priyanka/Update'] = 'Priyanka_Controller/Update';
