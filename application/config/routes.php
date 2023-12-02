<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'TrangChu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/dang-nhap'] = 'Admin/Login/index';
$route['admin/dang-xuat'] = 'Admin/Logout/index';

$route['admin/chuyen-muc'] = 'Admin/Category/index';
$route['admin/chuyen-muc/them'] = 'Admin/Category/add';
$route['admin/chuyen-muc/sua/(:any)'] = 'Admin/Category/update/$1';
$route['admin/chuyen-muc/xoa/(:any)'] = 'Admin/Category/delete/$1';
$route['admin/chuyen-muc/tim-kiem'] = 'Admin/Category/search';

$route['admin/san-pham'] = 'Admin/Product/index';
$route['admin/san-pham/them'] = 'Admin/Product/add';
$route['admin/san-pham/sua/(:any)'] = 'Admin/Product/update/$1';
$route['admin/san-pham/xoa/(:any)'] = 'Admin/Product/delete/$1';
$route['admin/san-pham/tim-kiem'] = 'Admin/Product/search';
$route['admin/san-pham/(:any)/nhap-clone'] = 'Admin/Product/importClone/$1';
$route['admin/san-pham/(:any)/xoa-clone'] = 'Admin/Product/deleteClone/$1';

$route['admin/nguoi-dung'] = 'Admin/User/index';
$route['admin/nguoi-dung/sua/(:any)'] = 'Admin/User/update/$1';
$route['admin/nguoi-dung/trang-thai/(:any)'] = 'Admin/User/changeStatus/$1';
$route['admin/nguoi-dung/tim-kiem'] = 'Admin/User/search';
$route['admin/nguoi-dung/(:any)/cong-tien'] = 'Admin/User/addMoney/$1';
$route['admin/nguoi-dung/(:any)/tru-tien'] = 'Admin/User/subtractMoney/$1';




