<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
		</div><!--.body-content-->	
		
		<footer class="footer">	
			<?php // get_footer('lg'); ?>
      		<section class="small-footer">
      			<div class="container">
      				<div class="row">
	      				<div class="">
			        		<div class="text-center footer-menu">
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
			        </div> <!-- .row -->				        
	        	</div> <!-- .container -->
	        </section>	
      		<section class="credit-footer background-dark">
      			<div class="container">		        
					<div class="row">
			        	<div class="col-md-4">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        			</small>		        			
			        		</div>			
			        	</div>	        	
			        	<div class="col-md-4 text-center">
			        		<ul class="list-inline">
			        			<li><a href="https://plus.google.com/+MarkRodenTexas" title="Google Plus"><i class="fa fa-google-plus fa-2x"></i></a></li>
			        			<li><a href="https://twitter.com/marklroden" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
			        			<li><a href="https://www.facebook.com/Dfwelp?fref=ts" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
			        			<li><a href="https://www.linkedin.com/in/markroden" title="LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a></li>
			        		</ul>
			        	</div>
		        		<div class="col-md-4">
			        		<div class="pull-right footer-credits text-right">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<small>Site crafted by Paradox</small>
			        			</a>
			        		</div>
			        	</div>				        	
			        </div>
			    </div>
			</section>
      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->

	</body>
</html>