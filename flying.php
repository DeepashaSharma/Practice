<!--<html>
<head>
<style>
#one
{
	width:100px;
	height:100px;
	background-color:red;
	  transform: translate(3em, 3em);
}
</style>
</head>
<body>
<div id ="one">
transition
</div>
</body>
</html>
-->






<!DOCTYPE html>
<html>
<head>
<style> 
div {
    width: 100px;
    height: 100px;
    position: relative;
    animation: myfirst 5s infinite;
    animation-direction: alternate;
}


@keyframes myfirst {
   /* 0%   { left: 0px; top: 0px;}
    25%  { left: 200px; top: 0px;}
    50%  { left: 200px; top: 200px;}
    75%  { left: 0px; top: 200px;}
    100% { left: 0px; top: 0px;}*/
	
	0%   { left: 200px; top: 0px;}
	50%  { left: 200px; top: 200px;}
	
	100%   { left: 200px; top: 0px;}
	
}

</style>
</head>
<body>

<p>Do the animation once, then do the animation backwards:</p>
<div> <img src="Images/0.jpg"></div>
<p><strong>Note:</strong> The animation-direction property is not supported in Internet Explorer 9 and earlier versions.</p>

<script>
 $(window).on("mousewheel DOMMouseScroll", function(animation){
       $.scrollTo.window().stop(true);
  });
</script>

<div class="animation-element slide-left testimonial">
hdfhshs
</div>


</body>
</html>
