<!DOCTYPE html>

<title>DSK-375732 - http one static anchor element</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
	img{
		width:16px;
		height:16px;
	}
	
	#messages{
		position:absolute;
		bottom:10px;
		height:30%;
		overflow:auto;
	}
</style>

<script src="res/test.js"></script>
<script>setProtocol(false);</script>
<body>
<?php 
	$prefix = preg_replace("/\.|:/","x",$_SERVER['REMOTE_ADDR']);
		$address = array($prefix.'code'.rand(0,1000000).'.prefetch.osa');
		foreach($address as $ad)
			echo '<a href="http://'.$ad.'/">test link</a>';
		echo '<script>check_dns('.json_encode($address).');</script>';
?>
<div id="messages"></div>
</body>
