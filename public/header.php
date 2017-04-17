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
		                   <form>
		<select name=collegeee>
			<option value='0' selected disabled>Select College</option>
				<option value=0>All</option>
			<?php
				$con = mysqli_connect("localhost","root","abhishek","Project2");
				$sql= "select * from collegedb";
				$run = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($run)){
				echo "<option>".$row['name']."</option>";

}
 ?>
		</select>
		<input type=submit name="submit">
	</form>
		               </div>
		              
		           </fieldset>
		       
               </form>
		        
		</div>
	</div>
    </body>
</html>
	