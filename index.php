<?php

if(strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false){
	echo "Hello facebook bot";
}
else{
	header("Location: https://www.facebook.com/centralparknyc");
	die();
}
?>
