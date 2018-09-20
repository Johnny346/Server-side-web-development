	<!--navbar section-->
	<!-- this head is used by the managerFuntionality scripts. See comment below. -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
	 <!-- 
		this is the code that was giving trouble; the href and src had to be written as if the header file was nested like the managerFuntionality scripts which call it
		(structure: swdproject -> managerFuntionality -> subfolder -> funtionality scripts) 
	 -->
     <a href="../../home.php"><img style="max-width:200px; margin-top: 5px;" src="../../images/logo.png"></a>
	  
    </div>
    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav">
		<li><a href="../../home.php">Home</a></li>
		<li><a href="../../memberships.php">Membership</a></li>
		<li><a href="../../events.php">Events</a></li>
		<li><a href="../../news.php">News</a></li>
		<li><a href="../../services.php">Services</a></li>
		<li><a href="../../contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
