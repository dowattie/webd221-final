<?php 

  $page_title = "Contact";
  include 'includes/header.php';
?>

	<header id="main-header-contact" >
			<h3>Talk<span> To Us</span></h3>
			<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
	</header>
	<aside class="intro" >
		<div class="container contactmsg">
			<h2>Contact  Us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
		</div>
	</aside>

	<article id="contact">
		<div class="container">
			<div id="map-canvas"></div>
			<div id="form">
				<form>
					<span class="big"><p>Contact Details:</p></span>
					<ul id="address">
					 	<li><i class="fa fa-phone"></i>(+91) 0975 720 3582</li>
					 	<li><i class="fa fa-envelope-o"></i>hello@UIBrush.com</li>
					 	<li><i class="fa fa-map-marker"></i>No.235, New St, 25th Sector, <br> <span class="tab">London, England</span></li>
				  	</ul>

				  <ul id="fill">
					  <li ><input type="text" placeholder="Name"></li><br>
					  <li ><input type="email" autocomplete="off" placeholder="Email" ></li>
				  </ul>
				  
				  <div id="messageB">
					  <input id ="inputMsg" type="text" placeholder="Message">
					  <input id ="submitBtn" type="submit">
				  </div>
				</form>
			</div>
		</div>
	</article>

	<?php 
	  include 'includes/footer.php';
	?>

</body>
<script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</html>