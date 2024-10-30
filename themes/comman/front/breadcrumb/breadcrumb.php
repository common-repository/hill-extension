<div class="hill_breadcrumb_info">
	<div class="breadcrumb_data">
		<section>
			<div class="breadcrumb-content">
				<div class="breadcrumb-heading">
					<h1><?php  hill_breadcrumb_title();	?></h1>
				</div>
				<ol class="breadcrumb-list">
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						<?php echo "&nbsp;&nbsp;/&nbsp;&nbsp;"; ?>
					</li>
					<li>
						<?php hill_breadcrumb_title();?>
					</li>
				</ol>
			</div> 
		</section>
	</div>		
</div>