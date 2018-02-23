<?php include 'includes/header.php' ?>
<?php
  //create database object
  $db = new Database;
  //create query
  $query="SELECT * FROM posts
          ORDER BY id ASC";
  //run query
  $posts= $db->select($query);

?>
<table class="table table-stripted">
  <tr>
    <th>Post ID</th>
    <th>Post Title</th>
    <th>Author</th>
    <th>Dates</th>
</tr>
    <?php while ( $row = $posts->fetch_assoc()) : ?>
      <tr>
       <td><?php echo $row['id']; ?></td>
       <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a></td>
       <td><?php echo $row['author']; ?></td>
       <td><?php echo formatDate($row['date']); ?></td>
     </tr>
    <?php endwhile; ?> 
</table>



<!-- CONTENT HERE -->
<?php include 'includes/footer.php' ?> 

