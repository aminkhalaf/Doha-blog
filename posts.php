<?php include 'includes/header.php' ?>
<?php
/// Create boject of our Database
$db = new Database();
// home posts query
$query = "SELECT * FROM posts";
//run query
$posts = $db->select($query);
?>
<?php if($posts) : ?>
<?php while ($row = $posts->fetch_assoc()) : ?>
<div class="blog-post">
      <h4 class="blog-post-title"><?php echo $row['title']; ?></h4>
      <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>
      <?php echo shortentext($row['body']); ?>
      <a class= "readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>", >Read More</a>
      </div><!-- /.blog-post -->
      <?php endwhile; ?>
      <?php else :   ?>
      <p>Trere are no posts yet. </p>
      <?php endif; ?>
      <?php include 'includes/footer.php' ?>