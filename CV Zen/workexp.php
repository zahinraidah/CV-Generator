<?php include 'connecttemplate.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Work Experience Info</title>
  <link rel="stylesheet" type="text/css" href="wstyle.css">
</head>
<body>
    <div class="banner">
    <nav>
      <div class="logo">
        <img src="Logo.png">
      </div>
    </nav>
  </div>
  <?php
  
   if(isset($_POST['save'])){
   $title= $_POST['title'];
   $description= $_POST['description'];
   $organization= $_POST['organization'];
   $sdate= $_POST['startdate'];
   $edate= $_POST['enddate'];
 
 //echo $name;
  $sql= "INSERT INTO `workexperience` (`wexpid`, `id`, `jobtitle`, `organization`, `description`, `startdate`, `enddate`) VALUES (NULL, '1', '$title', '$description', '$organization', '$sdate', '$edate');";


 if ($conn->multi_query($sql) === TRUE) {
   // echo "New records created successfully";
     } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
         }
      }

     $conn->close();
  //print_r($_POST)
    ?>

  <div class="header">
  	<h2>Edit Work Experience</h2>
  </div>
	 
    <form class="w3-card-4" style="width:65%" action="" method="post">
  	<div class="input-group">
  		<label>Job Title</label>
  		<input type="text" name="title" >
  	</div>
  	
    <div class="input-group">
      <label>Organization</label>
      <input type="text" name="organization">
    </div>
    
    <div class="input-group">
      <label>Description</label>
      <div class="textarea">
        <textarea rows="4" cols="60" name="description"> Enter your text here.. </textarea>
      </div>
      
    </div>
    <div class="input-group">
      <label>Start date</label>
      <input type="date" name="startdate">
    </div>
    <div class="input-group">
      <label>End date</label>
      <input type="date" name="enddate">
    </div>
    
  	<div class="input-group">
      <div class="button">
        <button type="submit" class="btn" name="save">Save</a></button>
        <button type="submit" class="btn" name="cancel"><a href="basiceditor.php">Cancel</a></button>
      </div>
    </div>
  </form>
</body>
</html>