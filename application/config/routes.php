<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/dang-nhap'] = 'Admin/Login/index';
$route['admin/dang-xuat'] = 'Admin/Logout/index';
$route['admin/quen-mat-khau'] = 'Admin/Login/forgotPassword';

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


$route['admin/khuyen-mai'] = 'Admin/Discount/index';
$route['admin/khuyen-mai/them'] = 'Admin/Discount/add';
$route['admin/khuyen-mai/sua/(:any)'] = 'Admin/Discount/update/$1';
$route['admin/khuyen-mai/xoa/(:any)'] = 'Admin/Discount/delete/$1';

$route['admin/don-hang'] = 'Admin/Order/index';
$route['admin/don-hang/xem/(:any)'] = 'Admin/Order/view/$1';
$route['admin/don-hang/tai-ve/(:any)'] = 'Admin/Order/download/$1';
$route['admin/don-hang/tim-kiem'] = 'Admin/Order/search';


$route['admin/nap-the'] = 'Admin/Card/index';
$route['admin/ngan-hang'] = 'Admin/Bank/index';

$route['admin/ca-nhan'] = 'Admin/Profile/index';

$route['admin/cai-dat'] = 'Admin/Setting/index';

$route['dang-nhap'] = 'Website/Login/index';
$route['dang-xuat'] = 'Website/Logout/index';


$route['chuyen-muc'] = 'Home/index';
$route['san-pham'] = 'Home/index';

$route['chuyen-muc/(:any)'] = 'Website/Category/index/$1';
$route['san-pham/(:any)'] = 'Website/Product/index/$1';

$route['thanh-toan/(:any)'] = 'Website/Product/pay/$1';

$route['don-mua'] = 'Website/Order/index';
$route['don-mua/(:any)'] = 'Website/Order/detail/$1';

$route['ca-nhan'] = 'Website/Profile/index';