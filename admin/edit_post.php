<?php include 'includes/header.php' ?>
<?php
	$id = $_GET['id'];
/// Create boject of our Database
$db = new Database();
// home posts query
//create query
$query = "SELECT * FROM posts WHERE id =".$id;
//run query
$post = $db->select($query)->fetch_assoc();
?>
<?php
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
$query = "UPDATE posts SET
title = '$title',
body  = '$body',
author  = '$author'
WHERE id=".$id ;
//run our query , validation of insert function in database file
$update_row = $db->update($query);
}
}
?>
<?php
if(isset($_POST['Delete'])){
$query="DELETE FROM posts WHERE id= ".$id;
//call delete method
$delete_row = $db->delete($query);}
?>
<form role="form" method= "post" action="edit_post.php?id=<?php echo $id; ?>">
	<div class="form-group">
		<label>Post Title</label>
		<input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label>Post Body</label>
		<textarea name="body" class="form-control" placeholder="Enter Body">
		<?php echo $post['body']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label>Author</label>
		<input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
	</div>
	<br>
	<div>
		<input name="submit" type="submit" class="btn btn-default" value="submit">
		<a href="index.php" class="btn btn-default">Cancel</a>
		<input name="Delete" type="submit" class="btn btn-danger"  onclick='return confirmDelete()' value="Delete">
	</div>
	<br>
</form>
<?php include 'includes/footer.php' ?>