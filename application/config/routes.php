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
$route['default_controller'] = 'Welcome';
$route['Graphic-Web-Design-Company'] = 'Welcome/home';
$route['Creative-Design-Portfolio'] = 'Welcome/portfolio';
$route['logo-design-kolhapur'] = 'Welcome/logo_design';
$route['website-design-development-kolhapur'] = 'Welcome/website_design';
$route['graphic-design-services-kolhapur'] = 'Welcome/graphic_design';
$route['digital-marketing-services-kolhapur'] = 'Welcome/digital_marketing';
$route['strategic-branding-kolhapur'] = 'Welcome/branding';
$route['signage-design-printing-kolhapur'] = 'Welcome/signage';
$route['printing-services-kolhapur'] = 'Welcome/printing_services';
$route['event-management-services-kolhapur'] = 'Welcome/corporate_event';
$route['website-development-training-kolhapur'] = 'Welcome/acadamy_web';
$route['digital-marketing-training-kolhapur'] = 'Welcome/acadamy_dmark';
$route['Testimonials'] = 'Welcome/testimonials';
$route['Contact'] = 'Welcome/contact';
$route['Add-Portfolio'] = 'Welcome/add_portfolio';
$route['Portfolio-Details/(:any)'] = 'Welcome/portfolio_detail/$1';
//$route['demo'] = 'Welcome/portfolio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
