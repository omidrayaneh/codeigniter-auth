<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * ------------------------------------------------
 * JWT Secure key
 * -------------------------------------------------
 */
$config['jwt_key']='eyJ0eXAiOiJKV1QiLCJh6GciTNvLUzI1NiJ9IdRkYXRhIg';

/**
|-----------------------
| JWT Algorithm Type
|--------------------------------------------------------------------------
*/
$config['jwt_algorithm'] = 'HS256';


/**
|-----------------------
| Token Request Header Name
|--------------------------------------------------------------------------
*/
$config['token_header'] = 'authorization';


/**
|-----------------------
| Token Expire Time
| https://www.tools4noobs.com/online_tools/hh_mm_ss_to_seconds/
|--------------------------------------------------------------------------
| ( 1 Day ) : 60 * 60 * 24 = 86400
| ( 1 Hour ) : 60 * 60     = 3600
| ( 1 Minute ) : 60        = 60
*/
$config['token_expire_time'] = 86400;