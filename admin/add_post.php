<?php include 'includes/header.php' ?>
<?php
/// Create object of our Database
		$db = new Database();
if(isset($_POST['submit'])){
	//set variables of fields
	$title = mysqli_real_escape_string($db->link ,$_POST['title']);
	$body = mysqli_real_escape_string($db->link ,$_POST['body']);
	$author = mysqli_real_escape_string($db->link ,$_POST['author']);
	// some validation
	if ($title == '' || $body == '' || $author== ''){
		//error message
			$error ='Please Enter All Required Data';
	}
	else {
		// set values like our database
		$query = "INSERT INTO posts( title , body , author ) VALUES ( '$title' , '$body', '$author') ";
		//run our query , validation of insert function in database file
		$update_row = $db->update($query);
	}
}
?>
<form role="form" method= "post" action="">
	<div class="form-group">
		<label>Post Title</label>
		<input name="title" type="text" class="form-control" placeholder="Enter Title">
	</div>
	<div class="form-group">
		<label>Post Body</label>
		<textarea name="body" class="form-control" placeholder="Enter Body" ></textarea>
	</div>
	<div class="form-group">
		<label>Author</label>
		<input  name="author" type="text" class="form-control" placeholder="Enter Author Name">
	</div>
	<input name="submit" type="submit" class="btn btn-default" value="submit">
	<a href="index.php" class="btn btn-default">Cancel</a>
</div>
</div>
<br>
</form>
<?php include 'includes/footer.php' ?>