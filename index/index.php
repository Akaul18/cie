<?php 
	include_once("../header.php");
 ?>
<div class="container-fluid main" id="page-top" >
	<div class="row">
		<div class="col-md-12 backg">
			<div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				<div class="text-box">
                	<p class="intro">DAV Startups</p>
                    <h2>Welcome to new generation economy <br/>from <br/>DAV Alumni</h3>
                    <p><a href="#section2" class="link-button" >OBJECTIVES</a></p>
				</div>
  			</div>
		</div>
		<div class="col-md-12 some-notes">
			<div class="title">
                <h2>Inaguration of CIE - Cell</h2>
            </div>
            <div class="desc">
                <p>The Centre for Incubation and Entrepreneurship was inaugurated at  DAV Institute of Engineering & Technology  By Mr. Srinivas Pothapragada, CEO of Ostilio, a high end appliance manufacture .<a href="http://davietjal.org/cie.html" target="_blank"> Read More ....</a></p>
            </div>
		</div>
	</div>
</div>

<?php include_once("../objectives.php"); ?>


<div class="container-fluid contact" id="section4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center portfolio-text">Contact</h2>
				<div class="col-md-6 col-sm-12 col-xs-12contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control form-effect" id="cname" placeholder="Name">
                    </div>
                    <div class="form-group">                                 
                        <input type="email" class="form-control form-effect" id="cemail" placeholder="Email" onblur="emaill(this.id)">
                    </div>
                    <div class="form-group">
                        <textarea type="textarea" class="form-control form-effect" id="ctext" placeholder="Message"></textarea>
                    </div>  
                    <button class="btn btn-default btn-sub" onclick="contactForm()">Submit</button>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 address-space">
					<div id="map-canvas"></div>
					<div class="address">
						<h3>Address</h3>
						<p><i class="glyphicon glyphicon-map-marker"></i>DAV Institute of Engineering & Technology,Kabir Nagar,Jalandhar - 144008,India </p>
						<p><i class="glyphicon glyphicon-earphone"></i>(0181) 2205851,(0181) 2202346 (FAX)</p>
						<p><i class="glyphicon glyphicon-envelope"></i>daviet@davietjal.org</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once("../footer.php"); ?>

<script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(31.3260152, 75.5761829),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
	$(document).ready(function () {
		$(document).on("scroll", onScroll);
 
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
 
			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
 
			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
	});
 
	function onScroll(event){
		var scrollPosition = $(document).scrollTop();
		$('nav a').each(function () {
			var currentLink = $(this);
			var refElement = $(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				$('nav ul li a').removeClass("active");
				currentLink.addClass("active");
			}
			else{
				currentLink.removeClass("active");
			}
		});
	}
	</script>
	<script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
      $('.timer').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });
 
      // start all the timers
      $('#starts').waypoint(function() {
    $('.timer').each(count);
	});
 
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
  	</script>
</body>
</html>
