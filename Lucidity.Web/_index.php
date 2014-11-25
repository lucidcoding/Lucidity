<?php
	function getCurrentUri()
	{
		$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
		$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
		if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
		$uri = '/' . trim($uri, '/');
		return $uri;
	}
 
	$base_url = getCurrentUri();
	$routes = array();
	$routes = explode('/', $base_url);
	foreach($routes as $route)
	{
		if(trim($route) != '')
			array_push($routes, $route);
	}
    
	if(strtolower($base_url) === "/software-developer-contractor-and-bespoke-software-solutions")
	{
        //echo "Something to see here";
		require('home.php'); 
		//require('C:\HostingSpaces\lucidity\luciditysoftware.co.uk\wwwroot\home.php'); 
	}
    else if (strtolower($base_url) === "/software-developer-contractor")
	{
		require('contractingdeveloper.php'); 
	}
    else
    {
        echo "Nothing to see here";
        //require('home.php'); 
    }
 
?>