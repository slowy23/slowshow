<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 							= 'home/index';
$route['404_override'] 									= '';
$route['translate_uri_dashes'] 							= FALSE;


/*-------------------------------------------------------
| Other Pages
--------------------------------------------------------*/
$route['education'] 						            = 'home/education';
$route['experiences'] 						            = 'home/experiences';
$route['smt-event-experiences'] 					    = 'home/smt_event_experiences';
$route['air-bnb-experiences'] 					        = 'home/air_bnb_experiences';
$route['air-bnb-experiences'] 					        = 'home/air_bnb_experiences';
$route['gallery'] 					                    = 'home/events';



/*-------------------------------------------------------
|---------------------- CDN ----------------------------|
--------------------------------------------------------*/
# images/asdasd.jpg?size=lg&type=gallery
$route['images/(:any)']                                  = 'content/cdn/export_image';



