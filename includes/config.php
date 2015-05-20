<?php
/**
 * Timezone Setting
 */
date_default_timezone_set('America/Chicago');

$config = array();

/**
 * Sandbox / Test Mode
 * -------------------------
 * TRUE means you'll be hitting PayPal's sandbox/test servers.  FALSE means you'll be hitting the live servers.
 */
$config['Sandbox'] = TRUE;

/**
 * API selection
 * 'PayPalPro-DDP, PayPalPro-PayFlow, PayPal-Rest'
 */
$config['ApiSelection'] = 'PayPal-Rest';

/*
 * PayPal API Version
 * ------------------
 * The library is currently using PayPal API version 119.0.
 * You may adjust this value here and then pass it into the PayPal object when you create it within your scripts to override if necessary.
 */
$config['APIVersion'] = '119.0';

/*
 * PayPal Gateway API Credentials
 * ------------------------------
 * These are your PayPal API credentials for working with the PayPal gateway directly.
 * These are used any time you're using the parent PayPal class within the library.
 *
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 *
 * You may obtain these credentials by logging into the following with your PayPal account: https://www.paypal.com/us/cgi-bin/webscr?cmd=_login-api-run
 */
$config['APIUsername'] = $config['Sandbox'] ? 'sandbo_1215254764_biz_api1.angelleye.com' : 'PRODUCTION_USERNAME_GOGES_HERE';
$config['APIPassword'] = $config['Sandbox'] ? '1215254774' : 'PRODUCTION_PASSWORD_GOGES_HERE';
$config['APISignature'] = $config['Sandbox'] ? 'AiKZhEEPLJjSIccz.2M.tbyW5YFwAb6E3l6my.pY9br1z2qxKx96W18v' : 'PRODUCTION_SIGNATURE_GOGES_HERE';

/*
 * Payflow Gateway API Credentials
 * ------------------------------
 * These are the credentials you use for your PayPal Manager:  http://manager.paypal.com
 * These are used when you're working with the PayFlow child class.
 *
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 *
 * You may use the same credentials you use to login to your PayPal Manager,
 * or you may create API specific credentials from within your PayPal Manager account.
 */
$config['PayFlowUsername'] = $config['Sandbox'] ? 'tester' : '';
$config['PayFlowPassword'] = $config['Sandbox'] ? 'Pr0t3ct!' : '';
$config['PayFlowVendor'] = $config['Sandbox'] ? 'angelleye' : '';
$config['PayFlowPartner'] = $config['Sandbox'] ? 'PayPal' : 'PayPal';

/*
 * PayPal REST API Credentials
 * ------------------------------
 */
$config['RESTAPIClient_Id'] = $config['Sandbox'] ? 'AbWX5DtTNUferjgDtrQfRQjqZIOnK25idCvaPH-R-VUpJZMHFG83LPU_o3-5d32dpnO2oVydlzIHjBRX' : '';
$config['RESTAPIClient_Secret'] = $config['Sandbox'] ? 'EBn7ARTYLux062X74_hFl_wKkSJMpq69oaVWTMRWWvH9QNt_JMjJ8G0rGczEB86skZf90goieMOQA0Qu' : '';

/**
 * Set Domain
 */
$config['Domain'] = ($config['Sandbox']) ? 'http://dev:2600/angelleye/angelleye-paypal-php-virtual-terminal-pos/' : 'http://www.domain.com/paypal-pos/';

/**
 * Enable Sessions
 */
if(!session_id()) session_start();

/**
 * Enable error reporting if running in sandbox mode.
 */
if($config['Sandbox'])
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

/**
 * Set Currency sign (default is US Dollar Sign $)
 */
$config['CurrencySign'] = '$';

/**
 * Set Currency Code
 * Allowed Types:  AUD, CAD, CZK, DKK, EUR, HKD, HUF, JPY, NOK, NZD, PLN, GBP, SGD, SEK, CHF, USD
 */
$config['CurrencyCode'] = 'USD';

/**
 * Show left nav menu
 * TRUE == Show, FALSE == HIDE
 */
$config['ShowNavMenuLeft'] = TRUE;

/**
 * Show swipe field on pos form
 * TRUE == Show, FALSE == HIDE
 */
$config['ShowSwipeField'] = TRUE;


/* End of file config.php */
/* Location: ./includes/config.php */
