<?php include('server.php') ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> Student &amp; Employee Website</h1>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="home.html" style="text-decoration: none; cursor:pointer;color: inherit;" >Home</a></li>
        <li><a href="http://localhost/webcup/members.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Members</a></li>
		  <li> <div class="dropdown">
  <button class="dropbtn">Statistics</button>
  <div class="dropdown-content">
    <a href="http://localhost/webcup/statistics.php">Stats Department</a>
    <a href="http://localhost/webcup/statistics2.php">Stats Boys</a>
    <a href="http://localhost/webcup/statistics3.php">Stats Girls</a>
  </div>
</div> </li>
        <li><a href="http://localhost/webcup/comment/index.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Project Forum</a></li>
        <li>Login/Register</li>
        <li>Contact us</li>
      </ul>
    </nav>

  </header>
  
  
  <br>
   
	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  
  
  
  
  
  <br><br>
  <footer class="mainfooter">
      <br>
      <a href="https://www.facebook.com/Curepipe-Starlight-Sports-Club-105270796211751/" target="_blank"><img src="../logos/fblogo.png" style="width: 40px;height: 40px;"></a> &nbsp;
      <a href=""><img src="../logos/instalogo.png" style="width: 40px;height: 40px;"></a> <br> <br>
      <a id="homepage" href="../csscfrontpage.html">Homepage</a>
      <p><a id="homepage" href="#"> Webmaster</a>
      <br>
      40 Forget Lane | Off Stevenson Street | Les Casernes <br> Curepipe , Mauritius | Tel : (230) 670 43 63, E-Mail Address: cssc.admin@intnet.mu
      
      
      </p>
    </footer>
</div>
</body>
</html>
