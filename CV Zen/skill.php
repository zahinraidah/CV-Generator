<?php include 'connecttemplate.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Skill Info</title>
  <link rel="stylesheet" type="text/css" href="sstyle.css">
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
  
   if(isset($_POST['addskill'])){
   $name= $_POST['sname'];
   $level= $_POST['level'];
 
 //echo $name;
  $sql= "INSERT INTO skills (`skillid`, `id`, `skillname`,`skillevel`) VALUES (NULL, '1', '$name', '$level');";


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

  <div class="header"  >
  	<h2>Edit Skill</h2>
  </div>
	 
  	
  	<form class="w3-card-4" style="width:65%" action="" method="post">
    <div class="input-group">
      <label>Skill Name</label>
      <input type="text" name="sname">
    </div>
    <div class="input-group">
      <label>Skill Level</label>
      <input type="number" name="level">
    </div>
      <!--<label>Description</label>
      <div class="textarea">
        <textarea rows="4" cols="60" name="Description"> Enter your text here.. </textarea>
      </div>-->
    
    
  	<div class="input-group">
      <div class="button">
        <button type="submit" class="btn" name="addskill"><a href="basiceditor.php">Save</a></button>
        <button type="submit" class="btn" name="cancel"><a href="basiceditor.php">Cancel</a></button>
      </div>
    </div>
    </form>
</body>
</html>