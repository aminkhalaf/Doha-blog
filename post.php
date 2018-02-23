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
<div class="blog-post">
	<h4 class="blog-post-title"><?php echo $post['title']; ?></h4>
	<p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
	<?php echo $post['body']; ?>
	</div><!-- /.blog-post -->
	<?php include 'includes/footer.php' ?>