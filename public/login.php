<!doctype html>
<html>
	<style>
		form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.login_form {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
	</style>
	<link rel="stylesheet" href="style.css" type="text/css" />
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
		       <div class="login">
		            
		              <form action="/action_page.php">
  
                      <div class="login_form">
                       <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                      <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
        
                      <button type="submit">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                      
                        <span class="psw">Forgot <a href="#">password?</a></span>
                        <h3>new user?</h3>
                        <button type="submit">SignUp</button> 
                      </div>
                      </form>
		       </div>
		 </div>
		<?php include ('footer.php'); ?>
		</div>
	</body>
</html>