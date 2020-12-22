<?php include 'connecttemplate.php'; 

  //$session["userid"]=4;
  //unset($session);
  if(!isset($session["userid"]))
  {
    echo "not logged in";
  }
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <?php 
          $sql = "SELECT * FROM personalinfo";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
                      
          ?>
          <!--<div class="w3-display-container">-->
          <!--<img src="ironman.jpg" style="width:100%" alt="Avatar">-->
          <div class="w3-container">
           <h1 class="w3-text-grey w3-padding-18 "><b><?php echo $row["name"]; ?></b></h1>
          </div>
          <hr>

          <div class="w3-container">
          <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["dateofbirth"]; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["address"]; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["email"]; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["contactno"]; ?></p>
          <hr>

          <?php
          }}
          ?>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>

          <?php 
          //$sql = "SELECT * FROM skills WHERE id=".$session['userid'];
          $sql = "SELECT * FROM skills";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["skillname"]. " " . $row["skillevel"]. "<br>";
                      
          ?>

              <p><?php echo $row["skillname"]; ?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width: <?php echo $row["skillevel"]; ?>%">
                  <?php echo $row["skillevel"]; ?>%</div>
              </div>

          <?php
          }}
          ?>
          <br>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Software Skills</b></p>

          <?php 
          $sql = "SELECT * FROM softwareskills";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["softwarename"]. " " . $row["slevel"]. "<br>";
                      
          ?>

              <p><?php echo $row["softwarename"]; ?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width: <?php echo $row["slevel"]; ?>%">
                  <?php echo $row["slevel"]; ?>%</div>
              </div>

          <?php
          }}
          ?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <?php 
          $sql = "SELECT * FROM languages";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["languagename"]. " " . $row["languagelevel"]. "<br>";
                      
          ?>

          <p><?php echo $row["languagename"]; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:20px;width:<?php echo $row["languagelevel"]; ?>%"></div>
          </div>

          <?php
          }}
          ?>
          
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <?php 
          $sql = "SELECT * FROM workexperience";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["startdate"]. " " . $row["institute"]. "<br>";
                      
          ?>   

          <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["jobtitle"]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["startdate"]; ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?php echo $row["description"]; ?></p>
          <hr>
        </div>

          <?php
          }}
          ?>
        <!--<div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div> -->
      </div> 

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <?php 
          $sql = "SELECT * FROM education";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["startdate"]. " " . $row["institute"]. "<br>";
                      
          ?>   

           <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["institute"]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["startdate"]; ?>  -  <?php echo $row["enddate"]; ?></h6>
          <h6><?php echo $row["degree"]; ?> in <?php echo $row["field"]; ?></h6>
          <hr>
        </div>

          <?php
          }}
          ?>
    </div>


    <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-address-card fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>References</h2>
        <?php 
          $sql = "SELECT * FROM reference";
          //echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["organization"]. " " . $row["refname"]. "<br>";
                      
          ?>   

           <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["refname"]; ?></b></h5>
          <h6 class="w3-text-black"><?php echo $row["refdesignation"]; ?>, <?php echo $row["reforganization"]; ?> </h6>
          <h6><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["refemail"]; ?></h6>
          <h6><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["refcontactno"]; ?></h6>
          <hr>
        </div>

          <?php
          }}
          ?>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

</body>
</html>
