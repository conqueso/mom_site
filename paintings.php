<?php include('header.php'); ?>

		<div id="container">

			<div class="pic"><a href="img/paintings/red_pears.jpg" data-lightbox="test" data-title="red pears - oil on canvas" alt="red pears - oil on canvas"><img src="img/paintings/red_pears.jpg" alt="red pears - oil on canvas"></a></div>

			<div class="pic"><a href="img/paintings/orange.jpg" data-lightbox="test" data-title="orange - oil on linen" alt="orange - oil on linen"><img src="img/paintings/orange.jpg" alt="orange"></a></div>

			<div class="pic"><a href="img/paintings/eggplant.jpg" data-lightbox="test" data-title="italian eggplant - oil on linen" alt="italian eggplant - oil on linen"><img src="img/paintings/eggplant.jpg" alt="monsieur"></a></div>

			<div class="pic"><a href="img/paintings/pears.jpg" data-lightbox="test" data-title="green pears - oil on canvas" alt="green pears - oil on canvas"><img src="img/paintings/pears.jpg" alt="monsieur"></a></div>

			<div class="pic"><a href="img/paintings/pear.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="lone pear" alt="lone pear"><img src="img/paintings/pear.jpg" alt="lone pear"></a></div>

			<div class="pic"><a href="img/paintings/persimmons.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="persimmons - oil on linen" alt="persimmons - oil on linen"><img src="img/paintings/persimmons.jpg" alt="persimmons - oil on linen"></a></div>

			<div class="pic"><a href="img/paintings/egg.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="still life with egg - oil on canvas" alt="still life with egg - oil on canvas"><img src="img/paintings/egg.jpg" alt="still life with egg - oil on canvas"></a></div>

			<div class="pic"><a href="img/paintings/apple.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="spooky apple - oil on linen" alt="spooky apple - oil on linen"><img src="img/paintings/apple.jpg" alt="spooky apple - oil on linen"></a></div>

			<div class="pic"><a href="img/paintings/lemon.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="lemon - oil on linen" alt="lemon - oil on linen"><img src="img/paintings/lemon.jpg" alt="lemon - oil on linen"></a></div>	

			<div class="pic"><a href="img/paintings/portrait.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="portrait" alt="portrait"><img src="img/paintings/portrait.jpg" alt="portrait"></a></div>

			<div class="pic"><a href="img/paintings/monsieur.jpg" data-lightbox="test" data-title="monsieur - oil on linen" alt="monsieur - oil on linen"><img src="img/paintings/monsieur.jpg" alt="monsieur"></a></div>

			<div class="pic"><a href="img/paintings/kim.jpg" data-lightbox="test" data-title="Kim - oil on linen" alt="Kim - oil on linen"><img src="img/paintings/kim.jpg" alt="monsieur"></a></div>

			<div class="pic"><a href="img/paintings/onions.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="onions" alt="onions"><img src="img/paintings/onions.jpg" alt="onions"></a></div>

			<div class="pic"><a href="img/paintings/standing.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="standing" alt="standing"><img src="img/paintings/standing.jpg" alt="standing"></a></div>
			
			<div class="pic"><a href="img/paintings/stuff.jpg" rel="lightbox-paintings" data-lightbox="test" data-title="stuff" alt="stuff"><img src="img/paintings/stuff.jpg" alt="stuff"></a></div>
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