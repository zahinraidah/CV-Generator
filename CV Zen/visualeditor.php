<!DOCTYPE html>
<html lang="en">
<head>
  <title>editor</title>
  <link rel="stylesheet" type="text/css" href="editorstyle.css">
  
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
          <a class="nav-link" href="basiceditor.php">Basic Editor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visualeditor.php">Visual Editor</a>
        </li>
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

<div class="row">

  <div class="col-sm-1 icon-bar">
    <a href="#"><i class="fa fa-home"></i></a> 
    <a href="#"><i class="far fa-clone"></i></a> 
    <a href="#"><i class="far fa-columns"></i></a> 
    <a href="#"><i class="fas fa-cog"></i></a>
    
  </div>

  <div class="col-sm-11" style="background-color: #F1F1F1;">
    <section style="top: 2em;">
      <h1 align="center" >Choose Your Template</h1>
    </section>  
  </div> 
</div>


</body>
</html>
