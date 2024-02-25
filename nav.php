<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="j\jquery-3.2.1.min.js.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/bootstrap-theme.css"/>
  <script src="js/bootstrap.min.js"></script>  
  <style>
  .icon-bar
  {
	   background-color:#336600;
  }
.navbar
  {
	  background-color:#33CC00;
	  border-radius:10px;
	  width:90%;
}

.nav li a
{
	 color:white;
	 text-align:center;
	 width:165px;                                                           
	 height:45px;
}

.nav li a:hover
{
	 background-color:#336600;
}
.dropdown-menu
{
	 background-color:#33CC00;  border-radius:10px;
}
.dropdown-menu li a:hover
{
	background-color:#336600;
}

  </style>
</head>
<body>
<center>
<nav class = "navbar " role = "navigation">
   
     <div class = "navbar-header">
         <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
           <span class = "sr-only">Toggle navigation</span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
        </button>
     </div>
   
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	    <ul class = "nav navbar-nav">
              <li class="dropdown"><a href = "1Home.php" class = "dropdown-toggle" data-toggle = "dropdown">Home<b class = "caret"></b></a>
			  			    <ul class = "dropdown-menu">
                               <li><a href="2Aboutus.php">About us</a></li>
                             </ul>
           	  </li>
              <li class="dropdown"><a href = "3Wgb.php" class = "dropdown-toggle" data-toggle = "dropdown">Why give blood<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
                               <li><a href="4Tnfb.php">The need for blood</a></li>
				               <li><a href="5Hbiu.php">How blood is used</a></li>
				               <li><a href="6Wych.php">Who you could help</a></li>
                             </ul>
			  </li>
			  <li class="dropdown"><a href = "7Wcgb.php" class = "dropdown-toggle" data-toggle = "dropdown">Who can give<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
                               <li><a href="8Dad.php">Donors and disability</a></li>
                             </ul>
			  </li>
			  <li class="dropdown"><a href = "9Dp.php#" class = "dropdown-toggle" data-toggle = "dropdown">Donation process<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
			                   <li><a href="10Ro.php">Registering online</a></li>
				               <li><a href="11Ptgb.php">Preparing to give blood</a></li>
				               <li><a href="12Whod.php">What happens at day</a></li>
				               <li><a href="13Ayd.php">After your donation</a></li>
			                </ul>
			  </li>
			  <li class="dropdown"><a href = "14Blood.php#" class = "dropdown-toggle" data-toggle = "dropdown">Blood<b class = "caret"></b></a>
			               <ul class = "dropdown-menu">
			                  <li><a href="15Wnb.php">Who need blood</a></li>
				              <li><a href="16Mnb.php">Most needed blood</a></li>
			              </ul>	 
			  </li>
			  <li><a href = "19Jwus.php">Join with us</a></li>
			  <li><a href = "20Contactus.php">Contact us</a></li>
	
         </ul>
   </div>
   
</nav>
</center>
</body>
</html>
