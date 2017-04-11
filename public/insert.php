
<?php	ini_set('mysql_connect_timeout',300);
	ini_set('default_socket_timeout',300);
?>

<html>
	<body>
			<form method="POST" action="#">
				
				<input type="file" name="image">
				
				<input type = "submit" name ="submit" value ="upload">
			</form>
			
			
	</body>
</html>

<?php

			if(isset($_POST['submit']))
			{	
				if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
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
						
				}

			}
			function saveimage($name,$image)
			{
				$con = mysqli_connect("localhost","root","abhishek","Project2");
				$qry = "insert into images (name,image) values ('$name','$image')";
				$result = mysql_query($qry,$conn);
				if($result)
				{
					echo "Image uploaded";
				}
				else
				{
					echo "not uploaded";
				}
			}
			
			?>