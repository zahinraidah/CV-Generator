<!DOCTYPE html>
<html>
<head>
  <title>Add Portfolio</title>
  <link rel="stylesheet" type="text/css" href="skillstyle.css">
</head>
<body>
    <div class="banner">
    <nav>
      <div class="logo">
        <img src="Logo.png">
      </div>
    </nav>
  </div>

  <div class="header">
  	<h2>Edit Portfolio</h2>
  </div>
	 
  	
  	
    <div class="input-group">
      <label>Portfolio Link</label>
      <input type="url" name="portfolio">
    </div>
    <div class="input-group">
      <label>Description</label>
      <div class="textarea">
        <textarea rows="4" cols="60" name="Description"> Enter your text here.. </textarea>
      </div>
    
  	<div class="input-group">
      <div class="button">
        <button type="submit" class="btn" name="save"><a href="basiceditor.php">Save</a></button>
        <button type="submit" class="btn" name="cancel"><a href="basiceditor.php">Cancel</a></button>
      </div>
    </div>
</body>
</html>