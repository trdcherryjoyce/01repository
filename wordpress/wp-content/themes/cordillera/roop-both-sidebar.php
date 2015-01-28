<div class="breadcrumb-box">
            <?php cordillera_get_breadcrumb();?>
        </div>
        <div class="blog-list">
			<div class="container">
            <div class="row">
					<div class="col-md-6 col-md-push-3">
						<section class="blog-main text-center" role="main">
							
                            <?php 
							if ( have_posts() ) :
							?>
                            <div class="blog-list-wrap">
                   <?php while ( have_posts() ) : the_post(); 
					    get_template_part("content","article");
					?>
                   <?php endwhile;?>
                   </div>
                   <?php endif;?>
                            		<div class="list-pagition text-center">
							<?php if(function_exists("cordillera_native_pagenavi")){cordillera_native_pagenavi("echo",$wp_query);}?>
							</div>
						</section>
					</div>
					<div class="col-md-3 col-md-pull-6">
						<aside class="blog-side left text-left">
							<div class="widget-area">
								<?php get_sidebar("postleft");?>
							</div>
						</aside>
					</div>
					<div class="col-md-3">
						<aside class="blog-side right text-left">
							<div class="widget-area">
							<?php get_sidebar("postright");?>
							</div>
						</aside>
					</div>
				</div>
			</div>	
		</div>