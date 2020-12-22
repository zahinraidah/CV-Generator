<?php include 'connecttemplate.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Education Info</title>
  <link rel="stylesheet" type="text/css" href="edstyle.css">
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
   $degree= $_POST['degree'];
   $field= $_POST['field'];
   $institute= $_POST['institute'];
   $sdate= $_POST['startdate'];
   $edate= $_POST['enddate'];
 
 //echo $name;
  $sql= "INSERT INTO education (`educationid`, `id`, `institute`, `field`, `degree`, `startdate`, `enddate`) VALUES (NULL, '1', '$institute', '$field', '$degree', '$sdate', '$edate');";


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
  	<h2>Edit Education</h2>
  </div>
	 
   <form class="w3-card-4" style="width:65%" action="" method="post">
  	<div class="input-group">
  		<label>Degree</label>
  		<input type="text" name="degree" >
  	</div>
  	
    <div class="input-group">
      <label>Institute</label>
      <input type="text" name="institute">
    </div>
    <div class="input-group">
      <label>Field</label>
      <input type="text" name="field">
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