<!doctype html>
<html>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<head>
		<title>index.php</title>
	</head>
	<body>
		<div class="container">
	    <div class="header">
	    	  <div class="header_top">
	           	<div class="header_top_res">
				<welcome align="center">
					<p>Welcome..!!</p>
				</welcome>
			    </div>
		    </div>
		       <div class="header_middle">
		             <a href="portfolio.php">
		             	<img src="images.png" alt="OLX" style="width:62px;height:62px;border:0;">
		             </a>
		       </div>
		        
		</div> 
	</div>
	<div align="center">
		<button class="button" style="vertical-align:middle" onclick="window.location.href='/public/login.php'"><span>Sign in</span></button>
		<button class="button" style="vertical-align:middle" onclick="window.location.href='/public/store.php'"><span>Store</span></button>
	</div>	
        <?php include ('footer.php'); ?>
	</body>

</html>