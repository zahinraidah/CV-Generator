<?php include 'connecttemplate.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Personal Info</title>
  <link rel="stylesheet" type="text/css" href="personstyle.css">
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
   $name= $_POST['name'];
   $address= $_POST['address'];
   $objective= $_POST['objective'];
   $email= $_POST['email'];
   $contactno= $_POST['contactno'];
   $bdate= $_POST['date'];
   
 //echo $name;
  $sql= "INSERT INTO `personalinfo` (`infoid`, `id`, `name`, `email`, `contactno`, `address`, `dateofbirth`, `objective`) VALUES (NULL, '1', '$name', '$email', '$contactno', '$address', '$bdate', '$objective');";


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
  	<h2>Edit Personal Info</h2>
  </div>
	 
   <form class="w3-card-4" style="width:65%" action="" method="post">
  	<div class="input-group">
  		<label>Name</label>
  		<input type="text" name="name" >
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
      <label>Address</label>
      <input type="text" name="address">
    </div>
    <div class="input-group">
      <label>Date of Birth</label>
      <input type="date" name="date">
    </div>
    <div class="input-group">
      <label>Objective</label>
      <input type="text" name="objective">
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