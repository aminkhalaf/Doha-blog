<?php include 'includes/header.php' ?>
<?php
//to sign up button
/// Create object of our Database
$db = new Database();
if(isset($_POST['submit'])){
//set variables of fields
$username = mysqli_real_escape_string($db->link ,$_POST['username']);
$password = mysqli_real_escape_string($db->link ,md5($_POST['password']));
// some validation
if ($username == '' || $password == ''){
//error message
$error ='Please Enter All Required Data';
}
else {
// set values like our database
$query = "INSERT INTO users( username , password ) VALUES ( '$username' , '$password' ) ";
//run our query , validation of insert function in database file
$update_row = $db->update($query);
      }
}
?>
<?php
// to login my admin page
$db = new Database();
if (isset($_POST['login'])) {
$username = mysqli_real_escape_string($db->link, $_POST['username']);
$password = mysqli_real_escape_string($db->link, $_POST['password']);
if ($username == '' || $password == ''){
//error message
$error ='Please Enter All Required Data';
}else {
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$users = $db->select($query);
if ($users) {
header('location: admin/index.php');
}else {
      echo "<script>
            alert('Username or Password invalid');
            window.location.href='';
            </script>";
}
}
}
?>
<?php
/// Create boject of our Database
$db = new Database();
// home posts query
//create query
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
