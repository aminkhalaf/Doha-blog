<?php include 'config/config.php' ?>
<?php include 'libraries/Database.php' ?>
<?php include 'helpers/format_helper.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Welcome To My First Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script type='text/javascript'>
    function conf_msg()
    {
    return confirm("You registerd successuly, Can login now");
    }
    </script>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container" class="pull-right">
        <form role = "form" method= "post" action="">
          <label class="blog-nav-item">Username</label>
          <input type="text" name="username" class="pull-right" placeholder="Enter your Username">
          <label class="blog-nav-item active">Password</label>
          <input type="password" name="password" class="pull-right" placeholder="Enter your password">
          <input name="login" type="submit" class="btn btn-default" value="Login">
          <input name="submit" type="submit" class="btn btn-default" onclick='return conf_msg()' value="Sign UP">
        </form>
      </div>
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="Posts.php">All Posts</a>
        </nav>
      </div>
    </div>
    <div class="container">
      <<div class="container">
      </div>
      <div class="blog-header">
        <div class="logo">
          <img src="images/logo.jpg" />
        </div>
        <h1 class="blog-title">Shababek Blog</h1>
        <p class="lead blog-description">News , Videos , Tutorials & more..</p>
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main">
