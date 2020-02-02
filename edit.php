<?php
include("get_user.php");

if(isset($_POST['update'])){

	$category = $_POST['category'];
    $abstract = $_POST['abstract'];
    $topic = $_POST['topic'];
    $document = $_POST['document'];
    $image = $_POST['image'];
	$category_edit = mysqli_real_escape_string($conn,$_POST['category']);
	$abstract_edit = mysqli_real_escape_string($conn,$_POST['abstract']);
	$topic_edit = mysqli_real_escape_string($conn,$_POST['topic']);
	$document_edit = mysqli_real_escape_string($conn,$_POST['document']);
	$image_edit = mysqli_real_escape_string($conn,$_POST['image']);

	
	$update_user = mysqli_query($conn,"UPDATE thesis SET category='$category_edit',abstract='$abstract_edit',topic='$topic_edit','document'='$document_edit',last_modified_date=NOW(),last_modified_by='$name' WHERE id='$uid' ")or die(mysqli_error($conn));	
	echo "<script>window.alert('User successfully updated!')</script>";
	echo "<script>window.location.href='main.php?attempt=userupdated'</script>";
}

function valid($id,$lname,$fname,$username,$password,$error){	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
</head>
<body>
	<form method="post" action="">
<table class="table table-hover table-dark" style="width: 50%;" align="center">
	<tr>
		<td align="center"><b>UPDATE USER</b></td>
	</tr>
	<tr>
		<td>Last Name:<br><input type="text" name="lname" placeholder="Enter lastname here..." required="" value="<?php echo $lname; ?>"></td>
	</tr>
	<tr>
		<td>First Name:<br><input type="text" name="fname" placeholder="Enter firstname here..." required="" value="<?php echo $fname; ?>"></td>
	</tr>
	<tr>
		<td>Username:<br><input type="text" name="username" placeholder="Enter username here..." required="" value="<?php echo $username; ?>"></td>
	</tr>
	<tr>
		<td>Password:<br><input type="password" name="password" placeholder="Enter password here..." required="" value="<?php echo $password; ?>"></td>
	</tr>
	<tr>
		<td>Confirm Password:<br><input type="password" name="confirm_password" placeholder="Confirm password..." required="" value="<?php echo $password; ?>"></td>
	</tr>
	<tr>
		<td align="center"><button type="submit" name="update" onclick="return confirm('Are you sure you want to update this user?')" style="cursor: pointer;">UPDATE</button></td>
	</tr>
	<tr>
		<td align="center"><font size="1px">All Rights Reserved. CRUD. &copy; 2019</font></td>
	</tr>
	<tr>
		<td><a href="main.php"><b>BACK</b></a></td>
	</tr>
</table>
	</form>
<?php
}
if(isset($_GET['uid']) && $_GET['uid']){
$uid = $_GET['uid'];
$query_user = mysqli_query($conn,"SELECT * FROM users WHERE id='$uid' ")or die(mysqli_error($conn));
	if(mysqli_num_rows($query_user) > 0){
		$row = mysqli_fetch_array($query_user);
		$id = $row['id'];
		$lname = $row['lname'];
		$fname = $row['fname'];
		$username = $row['username'];
		$password = $row['password'];

		valid($id,$lname,$fname,$username,$password,'');
	}
	else{
	echo "No Result Found.";
	}
}

?>	
</body>
</html>