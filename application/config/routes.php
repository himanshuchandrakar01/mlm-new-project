<?php
defined('BASEPATH') OR exit('No direct script access allowed');





// $route['default_controller'] = "Home";
$route['default_controller'] = 'HomeController';
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'Home/index';
$route['memberstore'] = 'Home/memberstore';
$route['userstore'] = 'Home/userstore';

$route['firstid'] = 'Home/idfirst';
$route['secondid'] = 'Home/idsecond';





$route['/'] = 'HomeController/index';
$route['home'] = 'HomeController/index';
$route['about'] = 'HomeController/about';
$route['product'] = 'HomeController/product';
$route['contact'] = 'HomeController/contact';


$route['membersignup'] = 'Home/membersignup';
$route['membersignup-store'] = 'Home/membersignup_store';
$route['addtaskuser_db'] = 'AddNewMember/addtaskuser_db';
$route['walletstore'] = 'Wallet/walletstore';
$route['wallet-details'] = 'Wallet/wallet_details';
$route['wallet-trs'] = 'Wallet/wallet_trs';
$route['paymentstore'] = 'Payment/paymentstore';
$route['user_wallet'] = 'Payment/user_wallet';
$route['userpaymentListing'] = 'Payment/userpaymentListing';
$route['payment'] = 'Payment/index';
$route['payment-receipt'] = 'Payment/paymentreceipt';
$route['print_rcp'] = 'Payment/print_rcp';
$route['change_sts'] = 'Payment/change_sts';
$route['paymentdelete/(:num)'] = 'Payment/paymentdelete/$1';
$route['memberdelete/(:num)'] = 'Home/memberdelete/$1';
$route['donate'] = 'Home/donate';
// $route['about'] = 'Home/about';
$route['vision-mission-goal'] = 'Home/vision';
$route['leadership-board'] = 'Home/leader';
$route['events'] = 'Home/events';
$route['career'] = 'Home/career';
$route['privacy'] = 'Home/privacy';
$route['disclaimers'] = 'Home/disclaimer';






/*********** USER DEFINED ROUTES *******************/
$route['loginMe'] = 'login/loginMe';
$route['active_now'] = 'login/active_now';
$route['dashboard'] = 'user';
$route['addNewMember'] = 'AddNewMember/addNewMem';
$route['addtaskuser'] = 'AddNewMember/addtaskuser';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['addNewUsers'] = "AddNewMember/addNewUser";
$route['addNewMem'] = "AddNewMember/addNewMem";
$route['MemberList'] = "user/MemberList";
$route['editOld'] = "User/editOld";



$route['userIds'] = "user/userIds";
$route['memberId'] = "user/memberId";
$route['bank-details'] = "user/bank_details";
$route['addBankDetails_db'] = "user/addBankDetails_db";
$route['generaluserids'] = "user/generaluserids";
$route['editOld/(:num)'] = "user/editOld/$1";


// $route['editold/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['refer-link'] = "user/refer_link";
$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";
$route['district-tree'] = "user/district_tree";
$route['admin-district-tree'] = "user/admin_district_tree";
$route['admin-assistant-tree'] = "user/admin_assistant_tree";
$route['state-tree/(:any)'] = "user/state_tree/$1";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

$route['roleListing'] = "roles/roleListing";
$route['roleListing/(:num)'] = "roles/roleListing/$1";
$route['roleListing/(:num)/(:num)'] = "roles/roleListing/$1/$2";
$route['roles/delete/(:num)'] = 'roles/rolesdelete/$1';

$route['userlist'] = "userlist/index";
$route['user-profile'] = "User/user_profile";
$route['add-notice'] = "User/add_notice";
$route['addNotice'] = "User/addNotice";
$route['test'] = "task/test";

$route['generallist'] = 'generaluser/generalListing';
$route['Districtlist'] = 'Userlist/userListing';
$route['AssistantList'] = 'Userlist/AssistantListing';
$route['All-StateList'] = 'Userlist/AllStateList';
$route['All-StateList-Tree'] = 'User/AllStateListTree';
$route['StateList'] = 'Userlist/StatetListing';
$route['notification_add'] = 'Userlist/notification_add';

$route['users_wallets'] = 'Wallet/users_wallets';
$route['users_wallets_db'] = 'Wallet/users_wallets_db';
$route['member-list'] = 'task/tasklisting';
$route['wallet'] = 'wallet/walletListing';
$route['member-payment'] = 'payment/paymentListing';
$route['member-bank-details'] = 'Wallet/bank_details_admin';
$route['add-new-member'] = 'task/add';
$route['add-payment'] = 'Payment/add';
$route['userpayment-new']='Payment/paymentnew';
$route['paymentmsg']='Payment/paymentmsg';
$route['productlist']='Payment/productlist';
$route['editold']='User/edit';
$route['editold/(:num)'] = 'user/editOld/$1';

 









/* End of file routes.php */
/* Location: ./application/config/routes.php */
