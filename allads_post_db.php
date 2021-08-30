<?php
	$title = $_POST['title'];
	$img1 = $_FILES["image1"];
	$file_name = $img1['tmp_name'];
	$destination = $img1['name'];
	if(move_uploaded_file($file_name, "image/".$destination)){
		$discription = $_POST['discription'];
		$price = $_POST['price'];
		$location = $_POST['location'];
		$catagory = $_POST['catagory'];
		$contact = $_POST['contact'];
		$register_number = $_POST['register_number'];

		require_once 'include/db.php';  
		$insert= "INSERT INTO allads(title,image,description,price,location,catagory,contact,register_number,reg_date) VALUES ('$title','$destination','$discription','$price','$location','$catagory','$contact','$register_number',NOW())";
		$query = mysqli_query($connection, $insert);
		header('location: index.php');
	}
?>
