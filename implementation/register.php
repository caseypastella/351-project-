<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <title>Business Talks</title>
 	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="text-center">
<h1> Business Talks</h1>
</div>
</head>

<body>

<nav class="navbar navbar-default" role="navigation" 

 style="border: 0; border-top: 1px solid #777777; 
 border-bottom: 1px solid #777777; background-color: #ffffff;">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active" style="border-right:2px solid silver;">
              <a href="index.php">Home</a></li>
              <li style="border-right:2px solid silver;">
              <a href="calendar.php">Calendar</a></li>
                             
               
                <li style="border-right:2px solid silver;">
          <a href="register.php">Register Business </a>
                  </li>
                              
               <li style="border-right:2px solid silver;">
               <a href="contact.php">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
        
<form class="form-horizontal" name="business" action="insert.php" method="post">
  
        
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Business Name</label>
      <div class="controls">
        <input type="text" name="businessname" placeholder="" class="input-xlarge">
        <p class="help-block">Business name entered above</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="Location">Location</label>
      <div class="controls">
        <input type="text" name="businessLocation" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide the city in which your business is located</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="Phonenumber">Phone Number</label>
      <div class="controls">
        <input type="tel" name="businessPhone" placeholder="" class="input-xlarge">
        <p class="help-block">Phone number to contact you</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="Business Address">Business Address</label>
      <div class="controls">
        <input type="text" name="businessAddress" placeholder="" class="input-xlarge">
        <p class="help-block">Please enter your business address</p>
      </div>
    </div>

	<div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="contact">Contact Name</label>
      <div class="controls">
        <input type="text" name="contactName" placeholder="" class="input-xlarge">
        <p class="help-block">Please enter a contact name</p>
      </div>
    </div>

 
        <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
	
      </div>
    </div>  

</form>

</body>

</html>

