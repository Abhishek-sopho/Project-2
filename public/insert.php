
<?php	ini_set('mysql_connect_timeout',300);
	ini_set('default_socket_timeout',300);
?>

<html>
	<body>
			<form method="POST" action="" enctype="multipart/form-data">
				
				
				Category:<input list="Category" placeholder="Category(tap to access)" name="category" required><br/>
				    <datalist id="Category">
					    <option value="Books">
					    <option value="Clothing">
					    <option value="Electronics">
					    <option value="Furniture">
					    <option value="Sports">
					   	<option value="Vehicles">
					    <option value="Others">
					</datalist>

				<select name=college>
					<option value='0' selected disabled>Select College</option>
					<option >Indian Institute of Technology, Delhi</option>
					<option >Indian Institute of Technology, Guwahati</option>
					<option >Indian Institute of Technology, Kanpur</option>
					<option >Indian Institute of Technology, Mandi</option>
					<option >Indian Institute of Technology, Bombay</option>
				</select>
				<br/>
				Title:<input type="text" placeholder="Title" name="title" required><br/>
				<input type="radio" name="choice" value="1">I want to Donate
    			<input type="radio" name="choice" value="0">I want to Sell<br>
				Price:<input type="text" placeholder="Price" name="price"><br/>
				Contact Info:<input type="text" placeholder="Contact Number" name="contact" required><br/>
				Upload Image:<input type="file" name="image"><br/>
				
				
				<input type = "submit" name ="submit" value ="upload">
			</form>
			
			
	</body>
</html>

<?php

			if(isset($_POST['submit']))
			{	

				
				$image = $_FILES["image"]["name"];
				$image_temp = $_FILES["image"]["tmp_name"];
				move_uploaded_file($image_temp, "images/$image");
				$title=$_POST['title'];
				$category=$_POST['category'];
				
				$college=$_POST['college'];
				$contact=$_POST['contact'];
				if($_POST['choice']==1){
					$price="I want to donate";
				}
				else{
					$price=$_POST['price'];
				}
				saveimage($image,$contact,$college,$category,$title,$price);


				/*if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
				{
					echo "please select an image";
				}
				else
				{
					$image = addslashes($_FILES['image']['tmp_name']);
					$name = addslashes($_FILES['image']['name']);
					$image = file_get_contents($image);
					$image = base64_encode($image);
					saveimage($name,$image);
						
				}*/

			}
			function saveimage($image,$contact,$college,$category,$title,$price)
			{
				

				$con = mysqli_connect("localhost","root","abhishek","Project2");
				$sql= "select * from collegedb where name ='$college'";
				$run = mysqli_query($con,$sql);
				
				$row = mysqli_fetch_array($run);
				$collegeid = $row['id'];	

				$sqlll= "select * from items where category ='$category'";
				$runnn = mysqli_query($con,$sqlll);
				
				$rowww = mysqli_fetch_array($runnn);
				$catid = $rowww['id'];
                 
         	  
				$qry= "insert into buy (image,title,price,college,category,date,contact) values ('$image','$title','$price','$collegeid','$catid',NOW(),'$contact')";
				
				$result = mysqli_query($con,$qry);

				if($result)
				{
					echo "Image uploaded";
				}
				if(!$result)
				{
					echo "not uploaded";
				}
			}
			
			?>