<?php

/*
| -------------------------------------------------------------------
| TWITTER CONFIG
| -------------------------------------------------------------------
*/

// required only for streaming api
$config['user'] = 'askmoreapp';
$config['pass'] = 'krakow';

// required only for api v1.1 search
/*
//askmore
$config['consumer_token']  = 'FwgZM3Bor4eVjKSsuan8AQ';
$config['consumer_secret'] = 'pySWgsSOOFO7E5KtjFwHevGuVPa2zu61D9mB5xG5g';
$config['access_token']    = '1628066413-SndUtaprGLczSWR5ktOE2qkPtJpXxsRTOoNai0I';
$config['access_secret']   = 'nJWzZ0ecnBwqrVyb36wUYoL1aCUOoYlNopMyAHqCLEI';
*/

$loadId = rand(1,3);

if ($loadId == 1) {
$config['consumer_token']  = 'FwgZM3Bor4eVjKSsuan8AQ';
$config['consumer_secret'] = 'pySWgsSOOFO7E5KtjFwHevGuVPa2zu61D9mB5xG5g';
$config['access_token']    = '1628066413-SndUtaprGLczSWR5ktOE2qkPtJpXxsRTOoNai0I';
$config['access_secret']   = 'nJWzZ0ecnBwqrVyb36wUYoL1aCUOoYlNopMyAHqCLEI';
} else if ($loadId == 2) {
$config['consumer_token']  = 'jgS3L0BOsPKin7ITaeFvYg';
$config['consumer_secret'] = '96FnFI1xweouOwuCCuLVBV5xqxtyvSMRqFEAPOwPlc';
$config['access_token']    = '769870435-eKKyR6DDezfQlFpowhrFuZzgrDLhFcoRmGLLyICa';
$config['access_secret']   = 'uXhAXtKM4smSFBK7KAZNmI8SwvEQWG36DsbOQGELEU';
} else if ($loadId == 3) {
$config['consumer_token']  = '3fnvEmlR2gHMXPfFiX4lpg';
$config['consumer_secret'] = 'HR2AcqLR3eiyADSOfUJyx1osvzp6JQHTGBhamjKSM';
$config['access_token']    = '769870435-n5nUsQyiPQG6mVte0qxGPb2uU9eG9qFnTzVLJ2dW';
$config['access_secret']   = 'MM7xyUvldPel6Kf8pfryuF84PNXFtep0XDNkkoMo';
}  


$config['twitter_consumer_token']		= $config['consumer_token'];
$config['twitter_consumer_secret']		= $config['consumer_secret'];
$config['twitter_access_token']			= $config['access_token'];
$config['twitter_access_secret']		= $config['access_secret'];
?>
