<!DOCTYPE html>

<head>
<title>DL App</title>
<style>
.h1{
  color: green;
  text-size: 24px;
  font-family: "Lucida Console", Monaco, monospace;
  text-align: center;
  }
</style>
<?php
// Get IP Address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function sql_server_setup() {
	$host = '';
	$port = ;
	$username = '';
 	$database = '';
	$password = '';
	
}
?>
</head>
<body>
<h1 class="h1">Welcome to Connor's Digital Leaders Application!</h1>
