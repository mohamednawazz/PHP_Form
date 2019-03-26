<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<body>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="form.css" type="text/css">
<button onclick="location.href='display.php'" style="float: right;">Entries</button>

<div class="body-content">
  <div class="module">
    <h1 id="new"><centre>CREATE AN ACCOUNT</centre></h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your Image/Display Picture: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>>

