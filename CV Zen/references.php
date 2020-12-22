<?php include 'connecttemplate.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit References Info</title>
  <link rel="stylesheet" type="text/css" href="refstyle.css">
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
   $name= $_POST['rname'];
   $designation= $_POST['designation'];
   $email= $_POST['email'];
   $org= $_POST['org'];
   $contactno= $_POST['contactno'];
   
 
 //echo $name;
  $sql= "INSERT INTO reference (`refid`, `id`, `refname`, `refdesignation`, `reforganization`, `refemail`, `refcontactno`) VALUES (NULL, '1', ' $name', '$designation', '$org', '$email', '$contactno');";


 if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
     } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
         }
      }

     $conn->close();
  //print_r($_POST)
    ?>

  <div class="header">
  	<h2>Edit References</h2>
  </div>
	 

   <form class="w3-card-4" style="width:65%" action="" method="post">
  	<div class="input-group">
      <label>Name</label>
      <input type="text" name="name" >
    </div>
    <div class="input-group">
      <label>Designation</label>
      <input type="text" name="designation">
    </div>
    <div class="input-group">
      <label>Organization</label>
      <input type="text" name="org">
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
  		<div class="button">
        <button type="submit" class="btn" name="save">Save</a></button>
        <button type="submit" class="btn" name="cancel"><a href="basiceditor.php">Cancel</a></button>
      </div>
  	</div>
  </form>
</body>
</html>