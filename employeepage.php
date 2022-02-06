<?php
//Template Name: Employee Page
get_header();
the_post();
?>
<!-- Start Employee  -->
<div class="employee-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="page-title">
					<?php the_title(); ?>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php 
					$employee_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$employee_query = new Wp_Query(
						array(
	                        "post_type" => "employee",
	                        "posts_per_page" => 6,
	                        "paged" => $employee_paged,
	                    ) 
                    );

                    while ($employee_query->have_posts()):
                    		$employee_query->the_post();
				?>
					<!-- Employee Card Start -->
					<div class="employee-card">
						<div class="row">
							<div class="col-md-4">
								<div class="employee-img">
									<?php the_post_thumbnail('medium'); ?>
								</div>
							</div>
							<div class="col-md-8">
								<div class="employee-info">
									<h3 class="employee_name" >
										<?php the_title(); ?>
						                <span class="employee_cat_name">
						                	( <?php employee_taxonomy_name('employee_category'); ?> )
						                </span>	
									</h3>
									<h5 class="employee_designation">
										<?php echo esc_html(get_field('employee_designation')); ?>
									</h5>
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					</div>
				<!-- Employee Card End -->
				<?php	
				    endwhile;
					employee_nabigation();
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>

<!-- End Employee  -->

<?php
get_footer()
?>