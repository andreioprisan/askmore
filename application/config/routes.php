<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//homepage
$route['default_controller'] = "welcome";

//auth
$route['login'] = "account/login";
$route['signup'] = "account/signup";
$route['signout'] = "account/signout";

//web view
$route['account/signup/save'] = "account/signup_save";
$route['account/login/save'] = "account/login_save";
$route['event/list'] = "eventc/list_a";
$route['event/edit'] = "eventc/edit";
$route['event/create'] = "eventc/create";
$route['event/create/save'] = "eventc/createnew";
$route['event/delete/(:any)'] = "eventc/delete/$1";
// mobile view
$route['events'] = "events/index";

// questions
$route['question/create/save'] = "questionc/createnew";
$route['question/(:any)/upvote'] = "questionc/upvote/$1";
$route['question/(:any)/downvote'] = "questionc/downvote/$1";
$route['question/(:any)/delete/(:any)'] = "questionc/delete/$1/$2";
$route['question/updatedsince/(:any)/(:any)'] = "questionc/getupdatedsince/$1/$2";



// twitter
$route['twitter/crawl'] = "twitter/crawl";
$route['twitter/sync'] = "twitter/sync";


#twilio
$route['twiml/sms'] = "twiml/sms";
$route['twiml/voice'] = "twiml/voice";

$route['(:any)'] = "eventc/lookup/$1";

$route['home'] = "home/index";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */