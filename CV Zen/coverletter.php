<?php ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Cover Letter</title>
  <link rel="stylesheet" type="text/css" href="coverstyle.css">

  <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- font awesome --> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
  <div class="mainbar"> 
    <nav>
      <div class="logo">
        <img src="Logo.png">
      </div>

      <div class="dropdown">
        <button style="margin-right: 5em;">
          <i class="far fa-user fa-4x"></i>
        </button>

        <div class="dropdown-content">
          <a href="dashboard.php">Dashboard</a>
          <a href="#">Account Settings</a>
          <a href="homepage.php">Logout</a>
        </div>
      </div>
    </nav>
  </div>

  <div class="subbar">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Preview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Share</a>
        </li>
      </ul>
    </nav>
  </div>



  <div class="cheader">
  	<h2>Edit Cover Letter</h2>
  </div>

  <div class="input-group">
    <label>Name</label>
    <input type="text" name="name" >
  </div>
  <div class="input-group">
    <label>Address</label>
    <input type="text" name="address">
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="email" name="email">
  </div>
  <div class="input-group">
    <label>Contact No</label>
    <input type="tel" name="contactno">
  </div>
  <div class="input-group">
    <label>Company Address</label>
    <input type="address" name="address2">
  </div>
  <div class="input-group">
    <label>Recipient Name</label>
    <input type="text" name="name2">
  </div>
  <div class="input-group">
    <label>Object</label>
    <input type="text" name="object">
  </div>
  <div class="input-group">
    <label>Description</label>
    <div class="textarea">
      <textarea rows = "10" cols = "120" name = "description"> Enter your text here..</textarea><br>
    </div>
  </div>
  <div class="input-group">
    <div class="button">
      <button type="submit" class="btn" name="save"><a href="dashboard.php">Save</a></button>
      <button type="submit" class="btn" name="cancel"><a href="dashboard.php">Cancel</a></button>
    </div>
  </div>
</body>
</html>