<?php
	//Multicraft API Settings
	require('MulticraftAPI.php');
	$api = new MulticraftAPI('http://example.com/api.php', 'YOURUSER', 'YOURAPICODE');
	
	//ServerID here
	$serverid = 9;
	
	//how many rows to show
	$rows = 50;	
	
	//dont touch
	$servercheck = $api->getServerStatus($serverid, true);
	$serverstatus = $api->getServerStatus($serverid, true)[data];
	$sista = sizeof($api->getServerLog($serverid)[data]);	
	//print_r($serverstatus[status]);
?>	

<html>
<head>
<title>Controll Panel ala JoccE</title>
<style>
body {
    background-color: black;
    color: white;
}
#header {
	width: 1000px;	
	height: 40px;
	border-style: solid;
    border-width: 2px;		
    margin-left: auto;
    margin-right: auto;
}
#body {
	width: 1000px;	
	border-style: solid;
    border-width: 2px;	
    margin-left: auto;
    margin-right: auto;
    min-height: 100px;
}
#footer {
	height: 20px;
	width: 1000px;	
	border-style: solid;
    border-width: 2px;	
    margin-left: auto;
    margin-right: auto;
}
.left {
	float: left;
	margin-top: 6px;
	margin-left: 4px;
}
</style>
</head>
<body>
<div id="header">
	<form method="post"  action="index.php" class="left">
	<input type="submit" value="Back" name="Back" /></form>
</div>
<div id="body">
	<?php
	//checks if server is started - Starts if offline otherwise nothing
	if ($serverstatus[status] == online) {
	
	print ("Server is already Online");
	
	}	else {
	
	$api->startServer($serverid);
	print ("You have started the server!");
	
	}
	
	?>	

</div>
<div id="footer">Restart Script made by JoccE</div>

</body>
</html>