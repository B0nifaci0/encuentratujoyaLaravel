<?php

return array(

	'mode' => 'live',

	# Account credentials from developer portal
	'Account' => array(
		'ClientId' => env('PAYPAL_CLIENT_ID', 'AV9Tt4nGuWTHfJKlITbQjMNeUJxkBk_WNmXTPVYfQjE7jrByZZe3vDsGqI1d18iruj11KO9Tf1v0oZSp'),
		'ClientSecret' => env('PAYPAL_CLIENT_SECRET', 'EJCakrnlbRAY4CYCZ_htIjtqgId3KRXMlLKGogmPYAsC4Kptzcm9q8864HkfbdFW74wYjhD0Gi65D3rO'),
	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!
		'EndPoint' => 'https://api.paypal.com'
		#'EndPoint' => 'https://api.sandbox.paypal.com',
	),


	# Logging Information
	'Log' => array(
		//'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		//'LogLevel' => 'FINE',
	),
);
