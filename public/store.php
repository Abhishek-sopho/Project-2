<?php  include('header.php'); ?>
<div class="container">
	<a href='insert.php'>Sell Item</a><br>
<ul>
		
	<li><a href="store.php?category=8">All</a></li>
	<li><a href="store.php?category=1">Books</a></li>
	<li><a href="store.php?category=2">Clothing</a></li>
	<li><a href="store.php?category=4">Electronics</a></li>
	<li><a href="store.php?category=5">Furniture</a></li>
	<li><a href="store.php?category=6">Sports</a></li>
	<li><a href="store.php?category=3">Vehicle</a></li>
	<li><a href="store.php?category=7">Others</a></li>
</ul>




<?php

	$category = $_GET['category'];
    $cat = $category;

$con = mysqli_connect("localhost","root","abhishek","Project2");

	$qry = "select * from buy where category='$category'";

if($category==8 || (!isset($_GET['category'])) ){
	$qry = "select * from buy";
}

if(isset($_GET['submit'])){

	$collegeee=$_GET['collegeee'];
	$qw = "select id from collegedb where name = '$collegeee'";
	$qwe = mysqli_query($con,$qw);
	$r = mysqli_fetch_array($qwe);
	$coll = $r['id'];
	$qry ="select * from buy where college = '$coll'";
}



$run = mysqli_query($con,$qry);
$count =mysqli_num_rows($run);
if($count==0){
	echo "no items yet :(";
	exit();
}

echo "<table border='2px' align ='center' width='100%' >
	<tr align='center'>
 
 <th>image</th>
 <th>title</th>
 <th>price</th>
 <th>college</th>
 <th>category</th>
 <th>contact</th>
</tr>";

while($row = mysqli_fetch_array($run)){
	//echo "dfss";

$image = $row['image'];
$title = $row['title'];
$price = $row['price'];
$contact = $row['contact'];
$college = $row['college'];
$category = $row['category'];

$sql= "select * from collegedb where id ='$college'";
				$runs = mysqli_query($con,$sql);
				
				$rows = mysqli_fetch_array($runs);
				$collegename = $rows['name'];


$query = "select * from items where id ='$category'";
			$runns = mysqli_query($con,$query);
			$rowsss = mysqli_fetch_array($runns);
			$catname = $rowsss['category'];	
                
//echo $name;
//echo "<img src='images/$image' width='125px' height='125px'>";
//echo "<br>";
?>

<tr align='center'>
<td><img width='100px' height='50px' src='images/<?php echo $image; ?>' ></td>

<td><?php echo $title; ?></td>
<td><?php echo $price; ?></td>
<td><?php echo $collegename; ?></td>

<td><?php echo $catname; ?></td>

<td>
	<?php 
if(isset($_GET['id'])){
	//$college=$college;
	echo $contact;
}
else{
	echo "<a href=\"store.php?id='get'\">contact seller</a>";
}

	/*

if(!isset($_GET['id'])){

echo "contact seller"; 
}
else{
	echo $contact;
}
*/
?></td>


</tr>




<?php
}


?>
</table>
</div>
<?php include ('footer.php'); ?>
