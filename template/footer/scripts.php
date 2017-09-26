
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript">
	Modernizr.load([
		
		//owl carousel
		{
			test : $('.logo-carousel').length > 0,
			yep : ["js/owl.carousel.min.js"],
			callback : { "js/owl.carousel.min.js" : function(){
					
					jQuery(".logo-carousel").owlCarousel({
						animateOut: 'flipInY',
					    animateIn: 'flipInY',
					    items:1,
					    smartSpeed:900,
					    loop:true,
					    autoplay:true
					});
					
				}
			}
		},
		
		
	])
</script>