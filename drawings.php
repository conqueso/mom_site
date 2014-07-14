<?php include('header.php'); ?>

		<div id="container">					
			
			<div class="pic"><a href="img/drawings/standing_bald.jpg" data-lightbox="test" data-title="standing pose - charcoal and chalk on toned paper" alt="tanding pose - charcoal and chalk on toned paper"><img src="img/drawings/standing_bald.jpg" alt="tanding pose - charcoal and chalk on toned paper"></a></div>

			<div class="pic"><a href="img/drawings/standing_portrait.jpg" data-lightbox="test" data-title="Angela - graphite and chalk on toned paper" alt="Angela - graphite and chalk on toned paper"><img src="img/drawings/standing_portrait.jpg" alt="Angela - graphite and chalk on toned paper"></a></div>

			<div class="pic"><a href="img/drawings/thinking.jpg" data-lightbox="test" data-title="standing and thinking" alt="standing and thinking"><img src="img/drawings/thinking.jpg" alt="standing and thinking"></a></div>

			<div class="pic"><a href="img/drawings/look_left.jpg" data-lightbox="test" data-title="Looking West - charcoal on paper" alt="Looking West - charcoal on paper"><img src="img/drawings/look_left.jpg" alt="Looking West - charcoal on paper"></a></div>
			
			<div class="pic"><a href="img/drawings/standing_front.jpg" data-lightbox="test" data-title="standing pose - charcoal and white chalk on toned paper" alt="standing pose - charcoal and white chalk on toned paper"><img src="img/drawings/standing_front.jpg" alt="standing pose - charcoal and white chalk on toned paper"></a></div>

			<div class="pic"><a href="img/drawings/sitting.jpg" data-lightbox="test" data-title="Angela - graphite and chalk on toned paper" alt="Angela - graphite and chalk on toned paper"><img src="img/drawings/sitting.jpg" alt="Angela - graphite and chalk on toned paper"></a></div>
			
			<div class="pic"><a href="img/drawings/look_right.jpg" data-lightbox="test" data-title="Looking West - charcoal and red chalk on toned paper" alt="Looking West - charcoal and red chalk on toned paper"><img src="img/drawings/look_right.jpg" alt="Looking West - charcoal and red chalk on toned paper"></a></div>
			
			<div class="pic"><a href="img/drawings/seated.jpg" data-lightbox="test" data-title="seated pose - charcoal and chalk on toned paper" alt="seated pose - charcoal and chalk on toned paper"><img src="img/drawings/seated.jpg" alt="seated pose - charcoal and chalk on toned paper"></a></div>
			
			<div class="pic"><a href="img/drawings/objects.jpg" data-lightbox="test" data-title="still life - charcoal on paper" alt="still life - charcoal on paper"><img src="img/drawings/objects.jpg" alt="still life - charcoal on paper"></a></div>
			
		</div>

		<script>
			$('#container').imagesLoaded( function(){
				$('#container').masonry({
				itemSelector: '.pic',
				columnWidth: 10
				});
			});
		</script>



		<footer>
			© 2014
		</footer>
	</body>
</html>
