<?php
/**
 * Timezone Setting
 */
date_default_timezone_set('America/Chicago');

/**
 * Setup $config array for options to be added later in the config file.
 */
$config = array();

/**
 * Sandbox / Test Mode
 * -------------------
 * TRUE means you'll be hitting PayPal's sandbox/test servers.  FALSE means you'll be hitting the live servers.
 */
$config['Sandbox'] = TRUE;

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
 * API Selection
 * -------------
 * This solution supports all 3 versions of PayPal APIs for credit card processing.
 *
 * Available Options: PayPalPro-DDP, PayPalPro-PayFlow, PayPal-Rest
 *
 * PayPalPro-DDP - This is used with Website Payments Pro 3.0 (DoDirectPayment API).
 * PayPalPro-PayFlow - This is used with Payments Pro 1.5 or Payments Pro 2.0 (PayFlow API)
 * PayPal-Rest - This is used with PayPal's REST API.
 *
 * Set this config option to the value shown above that matches what your PayPal account
 * is configured to use for processing credit cards directly.
 */
$config['ApiSelection'] = 'PayPal-Rest';

/**
 * PayPalPro-DDP API Credentials
 * -------------------------------------
 * These are your PayPal API credentials for working with PayPal Website Payments Pro (DoDirectPayment).
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 *
 * You may obtain these credentials by logging into the following link with your PayPal account.
 *
 * Sandbox: https://www.sandbox.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true
 * Live: https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true
 */
$config['APIUsername'] = $config['Sandbox'] ? 'sandbo_1215254764_biz_api1.angelleye.com' : 'LIVE_USERNAME_GOGES_HERE';
$config['APIPassword'] = $config['Sandbox'] ? '1215254774' : 'LIVE_PASSWORD_GOGES_HERE';
$config['APISignature'] = $config['Sandbox'] ? 'AiKZhEEPLJjSIccz.2M.tbyW5YFwAb6E3l6my.pY9br1z2qxKx96W18v' : 'LIVE_SIGNATURE_GOGES_HERE';

/**
 * PayPalPro-Payflow API Credentials
 * ------------------------------
 * These are the credentials you use for your PayPal Payments Pro 1.5 / 2.0 account.
 * These types of accounts use the PayPal Manager:  http://manager.paypal.com
 *
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 *
 * You may use the same credentials you use to login to your PayPal Manager,
 * or you may create API specific credentials from within your PayPal Manager account.
 *
 * You do need to include values for all 4 variables here, so if you are using the same
 * credentials you use to login to the PayPal Manager site then you will need to set
 * the same value for both PayFlowUsername and PayFlowVendor.
 */
$config['PayFlowUsername'] = $config['Sandbox'] ? 'tester' : 'LIVE_USERNAME_GOES_HERE';
$config['PayFlowPassword'] = $config['Sandbox'] ? 'Pr0t3ct!' : 'LIVE_PASSWORD_GOES_HERE';
$config['PayFlowVendor'] = $config['Sandbox'] ? 'angelleye' : 'LIVE_VENDOR_GOES_HERE';
$config['PayFlowPartner'] = $config['Sandbox'] ? 'PayPal' : 'LIVE_PARTNER_GOES_HERE';

/**
 * PayPal REST API Credentials
 * ---------------------------
 * These are the credentials used with PayPal's REST API.
 * These types of accounts are configured through your PayPal Developer Account (http://developer.paypal.com)
 *
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 */
$config['RESTAPIClient_Id'] = $config['Sandbox'] ? 'AbWX5DtTNUferjgDtrQfRQjqZIOnK25idCvaPH-R-VUpJZMHFG83LPU_o3-5d32dpnO2oVydlzIHjBRX' : 'LIVE_CLIENT_ID_GOES_HERE';
$config['RESTAPIClient_Secret'] = $config['Sandbox'] ? 'EBn7ARTYLux062X74_hFl_wKkSJMpq69oaVWTMRWWvH9QNt_JMjJ8G0rGczEB86skZf90goieMOQA0Qu' : 'LIVE_CLIENT_SECRET_GOES_HERE';

/**
 * Set Currency Sign (default is US Dollar Sign $)
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
 * Show/hide swipe field on POS form.
 * TRUE == Show, FALSE == HIDE
 */
$config['ShowSwipeField'] = TRUE;


/* End of file config.php */