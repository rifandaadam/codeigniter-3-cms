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
$route['default_controller']                = 'dashboard';
$route['404_override']                      = '';
$route['translate_uri_dashes']              = FALSE;

$route["categories"]                        = "product_categories";
$route["categories/new"]                    = "product_categories/new_form";
$route["categories/update/(:any)"]          = "product_categories/update_form/$1";

$route["products"]                          = "products";
$route["products/images/(:any)"]            = "products/image_form/$1";
$route["products/new"]                      = "products/new_form";
$route["products/update/(:any)"]            = "products/update_form/$1";

$route["orders"]                            = "orders";
$route["completed-orders"]                  = "orders/completed_orders";
$route["incomplete-orders"]                 = "orders/incomplete_orders";
$route["cancelled-orders"]                  = "orders/cancelled_orders";

$route["blog"]                              = "blog";
$route["blog-comments"]                     = "blog/blog_comments";
$route["blog/new"]                          = "blog/new_form";
$route["blog/update/(:any)"]                = "blog/update_form/$1";

$route["users"]                             = "users";
$route["authorized-users"]                  = "users/authorized_users";
$route["users/new"]                         = "users/new_form";
$route["users/update/(:any)"]               = "users/update_form/$1";
$route["users/update-password/(:any)"]      = "users/update_password_form/$1";

$route["user-roles"]                        = "user_roles";
$route["user-roles/new"]                    = "user_roles/new_form";
$route["user-roles/update/(:any)"]          = "user_roles/update_form/$1";
$route["user-roles/permissions/(:any)"]     = "user_roles/permissions_form/$1";

$route["sliders"]                           = "sliders";
$route["sliders/new"]                       = "sliders/new_form";
$route["sliders/update/(:any)"]             = "sliders/update_form/$1";

$route["portfolio"]                         = "portfolio";
$route["portfolio/images/(:any)"]           = "portfolio/image_form/$1";
$route["portfolio/new"]                     = "portfolio/new_form";
$route["portfolio/update/(:any)"]           = "portfolio/update_form/$1";

$route["settings"]                          = "settings";

$route["login"]                             = "userop/login";
$route["logout"]                            = "userop/logout";
$route["register"]                          = "userop/register";
$route["forget-password"]                   = "userop/forget_password";
$route["reset-password"]                    = "userop/reset_password";