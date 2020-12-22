<!DOCTYPE html>
<html lang = 'en'>
<head>
  <title>Add Sections</title>
  <link rel="stylesheet" type="text/css" href="addsectionstyle.css">
  <link rel="stylesheet" type="text/css" href="basicstyle.css">
  <body>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

  <div class="wrapper">
  <div class="Addsection"> Add Section
   <a class="btn btn-default btn-sm" href="#">
      <i class="fa fa-plus-square"></i> </a>
  </div>

  <div class="References2">
  </div>

  <div class="AddTextsection"> Add Text Section
   <a class="btn btn-default btn-sm" href="#">
      <i class="fa fa-plus-square"></i> </a>
  </div>

  <div class="AddPortfolio"> Add Portfolio
   <a class="btn btn-default btn-sm" href="portfolio.php">
      <i class="fa fa-plus-square"></i> </a>
  </div>

  <div class="AddEducation"> Add Extra Courses
   <a class="btn btn-default btn-sm" href="#">
      <i class="fa fa-plus-square"></i> </a>
  </div>

  <div class="AddExperience"> Add Experience
   <a class="btn btn-default btn-sm" href="#">
      <i class="fa fa-plus-square"></i> </a>
  </div>

  <div class="AddGeneralSkills"> Add General Skills
   <a class="btn btn-default btn-sm" href="#">
      <i class="fa fa-plus-square"></i> </a>
  </div>


</div>
  </body>
</head>