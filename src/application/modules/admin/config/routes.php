<?php
$route['admin'] 	= "dashboard_controller/index";
$route['admin/search'] 	= "dashboard_controller/search";
$route['admin/search/(:any)'] 	= "dashboard_controller/search/$1";

