<!doctype html>
<html>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<head>
	</head>
	<body>
	<div class="container">
	    <div class="header">
	        <div class="header_top">
	           	<div class="header_top_res">
				<p>
					Welcome, <strong><?php echo $_POST['uname'];?></strong>
					[<a href="myprofile.php"> My Profile </a>| <a href="index.php"> Log out </a> ]
				</p>
			    </div>
		    </div>
		       <div class="header_middle">
		             <a href="portfolio.php">
		             	<img src="images.png" alt="OLX" style="width:62px;height:62px;border:0;">
		             </a>
		       </div>
		       <form>
		           <fieldset>
		               <div class "college-search">
		                   <input type="text" name="college_search" placeholder="College Search">
		                   <input type="submit" name="query">
		               </div>
		              
		           </fieldset>
		       
               </form>
		        
		</div>
	</div>
    </body>
</html>
	