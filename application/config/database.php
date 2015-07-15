<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'database01';
$active_record = TRUE;

$db['database01']['hostname'] = '10.6.16.67';
$db['database01']['username'] = 'backenduser';
$db['database01']['password'] = 'backenduser_1024';
$db['database01']['database'] = 'backend';
$db['database01']['dbdriver'] = 'mysql';
$db['database01']['dbprefix'] = '';
$db['database01']['pconnect'] = TRUE;
$db['database01']['db_debug'] = FALSE;
$db['database01']['cache_on'] = FALSE;
$db['database01']['cachedir'] = '';
$db['database01']['char_set'] = 'utf8';
$db['database01']['dbcollat'] = 'utf8_general_ci';
$db['database01']['swap_pre'] = '';
$db['database01']['autoinit'] = TRUE;
$db['database01']['stricton'] = FALSE;

$db['database02']['hostname'] = '10.6.16.67';
$db['database02']['username'] = 'cmsuser';
$db['database02']['password'] = 'cmsuser_1024';
$db['database02']['database'] = 'cms';
$db['database02']['dbdriver'] = 'mysql';
$db['database02']['dbprefix'] = '';
$db['database02']['pconnect'] = TRUE;
$db['database02']['db_debug'] = FALSE;
$db['database02']['cache_on'] = FALSE;
$db['database02']['cachedir'] = '';
$db['database02']['char_set'] = 'utf8';
$db['database02']['dbcollat'] = 'utf8_general_ci';
$db['database02']['swap_pre'] = '';
$db['database02']['autoinit'] = TRUE;
$db['database02']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */