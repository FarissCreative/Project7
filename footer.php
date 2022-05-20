

<footer class="container5">

	<div class="footer-boksen">

	<?php
	if(is_active_sidebar('footer-1')){
	dynamic_sidebar('footer-1');
	}
	?>
	</div>



	<div class="footer-boksen">

	<?php
	if(is_active_sidebar('footer-2')){
	dynamic_sidebar('footer-2');
	}
	?>
	</div>


	<div class="footer-boksen">

	<?php
	if(is_active_sidebar('footer-3')){
	dynamic_sidebar('footer-3');
	}
	?>
	</div>



	<div class="footer-boksen">

	<?php
	if(is_active_sidebar('footer-4')){
	dynamic_sidebar('footer-4');
	}
	?>


	</div>

         
</footer>


 
 <?php
    wp_footer(); // wordpress gonna inject the files it needs for the page by itself from functions php file.
    ?>  


</body>
</html> 